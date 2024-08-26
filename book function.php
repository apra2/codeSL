    <?php
    date_default_timezone_set('Asia/Kathmandu');
    function addCategory($t,$r,$s,$c)
    {
        try
        {
            $connect = new mysqli('localhost','root','','bk_category');
            $insertsql = "insert into book_category (title,rank,status,created_at) values ('$t',$r,$s,'$c')";
            $connect->query($insertsql);
            if ($connect->insert_id > 0 && $connect->affected_rows == 1) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(Exection $ex)
        {
            die('Error:' . $ex->getMessage());
        } 
    }
    function printError($error,$index)
    {
        if(array_key_exists($index,$error))
        {
            return "<span class='error'>" .$error[$index] . "</span>";
        }
        return false;
    }
    //define all function of book Category data into array
    function getAllBookCategory()
    {
        try
        {
            $connect = new mysqli('localhost','root','','bk_category');
            $selectquery = "SELECT * FROM book_category order by title"; // * rakhyo vani sabai aaunxa 
            //query is created aba query execute vayesi
            $result=$connect->query($selectquery);
            $records=[];
            //an empty array records is initialized to store all fetched records.
            if($result ->num_rows >0)
            {
                while($d =$result -> fetch_assoc())
                {
                    array_push($records,$d);
                    //$d ma thiyo fetch vako each row aba records ma rakyo
                }
            }
            return $records;
        }
            catch(Exection $ex)
            {
                die ('Error:' .$ex ->getMessage());
            }
    }

    //function to print status
   

    function deleteBookCategory($id){
        try
        {
            $connect = new mysqli('localhost','root','','bk_category');
            $deletesql = "delete from book_category where ID=$id";
            $connect->query($deletesql);
            if ($connect->affected_rows == 1) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(Exection $ex)
        {
            die('Error:' . $ex->getMessage());
        }
    } 
    function getBookCategoryById($id){
        try{
            $connect = new mysqli('localhost','root','','bk_category');
            $selectquery = "select * from book_category where id=$id";
            $result = $connect->query($selectquery);
            $records = [];
           if ($result->num_rows == 1) {
            //fetch data from database result object
                $d = $result->fetch_assoc();
                return $d;
            } else {
                return false;
            }
           }catch(Exection $ex){
            die('Error:' . $ex->getMessage());
        }
    }
    function updateCategory($t,$r,$s,$u,$id){
        try{
            $connect = new mysqli('localhost','root','','bk_category');
            $insertsql = "update book_category set title='$t',rank=$r,status=$s,updated_at='$u' where ID=$id";
            $connect->query($insertsql);
            if ($connect->affected_rows == 1) {
                return true;
            } else {
                return false;
            }
        }catch(Exection $ex){
            die('Error:' . $ex->getMessage());
        } 
    }

    function printStatus($status)
    {
        if($status == 1){
            return "<span class='success'>Active</span>";
        }
        return "<span class='error'>De-Active</span>";
    }

    ?>


 



    <!--fetch array,assoc,row,object 
    /*assoc :associative
    array: numeric assc
    row:numeric
    object: object-->
