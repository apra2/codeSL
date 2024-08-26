    <?php
    date_default_timezone_set('Asia/Kathmandu');
    function addStudent($n, $f, $r, $p, $c, $a, $d, $s, $z) 
    {
        try {
            $connect = new mysqli('localhost', 'root', '', 'student_category');
            if ($connect->connect_error) 
            {
                die('Connection failed: ' . $connect->connect_error);
            }
            $insertsql = "INSERT INTO students (name, fee, roll_no, phone, course, address, dob, status, created_at) 
                        VALUES ('$n', $f, $r, $p, '$c', '$a', '$d', '$s', '$z')";
            $connect->query($insertsql);
            if ($connect->insert_id > 0 && $connect->affected_rows == 1) 
            {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            die('Error: ' . $ex->getMessage());
        }
    }

    function printError($error, $index) {
        if (array_key_exists($index, $error)) {
            return "<span class='error'>" . $error[$index] . "</span>";
        }
        return false;
    }

    function getAllStudents() 
    {
        try 
        {
            $connect = new mysqli('localhost', 'root', '', 'student_category');
            if ($connect->connect_error) 
            {
                die('Connection failed: ' . $connect->connect_error);
            }
            $selectquery = "SELECT * FROM students";
            $result = $connect->query($selectquery);
            $records = [];
            if ($result->num_rows > 0)
            {
                while ($d = $result->fetch_assoc())
                {
                    array_push($records, $d);
                }
            }
            return $records;
        } 
        catch (Exception $ex)
        {
            die('Error: ' . $ex->getMessage());
        }
    }

    function deleteStudent($id)
    {
        try
        {
            $connect = new mysqli('localhost' ,'root' ,'' ,'student_category');
            $deletesql = "delete from students where id=$id";
            $connect->query($deletesql);
            if($connect->affected_rows==1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (Exception $ex)
        {
            die('Error'. $ex ->getMessage());
        }
    }
    function getStudentCategoryById($id)
    {
        try
        {
            $connect = new mysqli('localhost','root','','student_category');
            $selectquery = "select * from students where id=$id";
            $result = $connect->query($selectquery);
            $records = [];
            if ($result->num_rows == 1) 
            {
                $d = $result->fetch_assoc();
                return $d;
            } 
            else 
            {
                return false;
            }
        }
        catch(Exception $ex)
        {
            die('Error:' . $ex->getMessage());
            }
    }

    function updateStudents($n, $f, $r, $p, $c, $a, $d, $s, $w, $id) 
    {
        try{
            $connect = new mysqli('localhost','root','','student_category');
            $insertsql = "update students set name='$n',fee=$f, roll_no=$r, phone =$p,course='$c',address = '$a', dob='$d', status= '$s',updated_at='$w' where id=$id";
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
        if ($status == 1) {
            return "<span class='success'>Active</span>";
        }
        return "<span class='error'>De-Active</span>";
    }
    ?>