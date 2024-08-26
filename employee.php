<?php
$error=[];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    if (isset($_POST['id']) && !empty($_POST['id']) && trim($_POST['id'])) 
    {
        $id = $_POST['id'];
        if (!preg_match('/^[0-9]{3,5}$/', $id))
         {
            $error['id'] = "Enter a valid id (3-5 digits)";
        }
    } 
    else
     {
        $error['id'] = 'Enter your id';
    }

    if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) 
    {
        $name = $_POST['name'];
        if (!preg_match('/^[A-Za-z]{3,50}$/', $name)) 
        {
            $error['name'] = 'Enter Valid name';
        }
    } 
    else
     {
        $error['name'] = 'Enter your name';
    }

    if (isset($_POST['hire_date']) && !empty($_POST['hire_date']) && trim($_POST['hire_date'])) {
        $hire_date = $_POST['hire_date'];
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $hire_date)) 
        {
            $error['hire_date'] = "Enter a valid hire date";
        }
    } 
    else 
    {
        $error['phone'] = 'Enter your hired date';
    }


    if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) {
        $phone = $_POST['phone'];
        if (!preg_match('/^98[0-9]{8}$/', $phone)) {
            $error['phone'] = "Enter a valid phone number (starting with 98)";
        }
    } 
    else 
    {
        $error['phone'] = 'Enter your phone number';
    }


    if (isset($_POST['dob']) && !empty($_POST['dob']) && trim($_POST['dob'])) 
    {
        $dob = $_POST['dob'];
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dob)) {
            $error['dob'] = "Enter a valid date of birth (YYYY-MM-DD)";
        }
    } 
    else 
    {
        $error['dob'] = 'Enter your date of birth';
    }


    if (isset($_POST['position']) && !empty($_POST['position']) && trim($_POST['position'])) 
    {
        $position = $_POST['position'];
        if (!preg_match('/^[A-Za-z]{3,50}$/', $position)) 
        {
            $error['position'] = 'Enter the valid position';
        }
    } 
    else
     {
        $error['position'] = 'Enter your position';
    }


    
    if (isset($_POST['salary']) && !empty($_POST['salary']) && trim($_POST['salary'])) 
    {
        $salary = $_POST['salary'];
        if (!preg_match('/^[0-9]{3,7}$/', $salary)) 
        {
            $error['salary'] = 'Enter the valid salary';
        }
    } 
    else
     {
        $error['salary'] = 'Enter your salary';
    }




    if (count($error) == 0) 
    {
        try {
            $connection = new mysqli('localhost','root','','db_pkmc_apra');
            echo $sql = "insert into tbl_1(id,name,phone,dob, hire_date ,position,salary) 
            values ($id,'$name', '$phone','$dob', '$hire_date','$position','$salary')";
            //mysqli_query($connection,$sql);
            $connection->query($sql);
            //
            if($connection->affected_rows == 1)
            {
                echo 'Signup success';
            } else{
                echo 'Signup failed';
            }
        } catch (Exception $th) {
            echo 'Error' . $th->getMessage();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <style>
        fieldset
        { 
        background-color: lavender;
        padding:7px;
        width: 150px;
        margin:auto;
        }
        </style>

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method ="post" >
        <fieldset>
            <legend> Employee Details</legend>

             <div class ="form-group">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" value="<?php echo isset($id)?$id:'' ?>" />
            <span style="color: red"><?= isset($error['id']) ? $error['id'] : ''?></span>
            </div>


            <div class ="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($name)?$name:''?>" />
            <span style="color: red"><?= isset($error['name']) ? $error['name']: ''?></span>
            </div>


            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="<?php echo isset($phone)?$phone:''?>"/>
                <span style="color: red"><?= isset($error['phone']) ? $error['phone'] : '' ?></span>
            </div>


            <div class ="form-group">
            <label for="dob">DOB:</label>
            <input type="date" id="dob" name="dob" value="<?php echo isset($dob)?$dob:''?>" />
           <span style="color: red"><?= isset($error['dob']) ? $error['dob'] : '' ?></span>
            </div>

            <div class ="form-group">
            <label for="hire_date">Hire_Date:</label>
            <input type="date" id="hire_date" name="hire_date" value="<?php echo isset($hire_date)?$hire_date:''?>" />
            <span style="color: red"><?= isset($error['hire_date']) ? $error['hire_date'] : '' ?></span>
            </div>

            <div class ="form-group">
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="<?php echo isset($position)?$position:''?>" />
            <span style="color: red"><?= isset($error['position']) ? $error['position'] : '' ?></span>
            </div>
    

            <div class ="form-group">
            <label for="salary">Salary:</label>
            <input type="text" id="salary" name="salary" value="<?php echo isset($salary)?$salary:''?>" />
            <span style="color: red"><?= isset($error['salary']) ? $error['salary'] : '' ?></span>
            </div>

            <button type="submit">Register</button>
            </body>
            </html>
            