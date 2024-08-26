<?php
$error = [];


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
        if (!preg_match('/^[A-Za-z]{3,5}$/', $name)) 
        {
            $error['name'] = 'name must be at least 2 characters long';
        }
    } 
    else
     {
        $error['name'] = 'Enter your name';
    }

    if (isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address'])) {
        $address = $_POST['address'];
        if (!preg_match('/^[A-Za-z]{3,50}$/', $address)) {
            $error['address'] = 'Enter valid Address';
        }
    } 
    else
     {
        $error['address'] = 'Enter your address';
    }

    if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) {
        $phone = $_POST['phone'];
        if (!preg_match('/^98[0-9]{8}$/', $phone))
         {
            $error['phone'] = "Enter a valid phone number(starting with 98)";
        }
    } 
    else 
    {
        $error['phone'] = 'Enter your phone number';
    }

    if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "Enter a valid email address";
        }
    } 
    else 
    {
        $error['email'] = 'Enter your email address';
    }

    if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) 
    {
        $password = $_POST['password'];
        if (strlen($password) < 8) {
            $error['password'] = 'password must be at least 8 characters long';
        }
    }
     else 
    {
        $error['password'] = 'Enter your password';
    }

    if (isset($_POST['dob']) && !empty($_POST['dob']) && trim($_POST['dob'])) {
        $dob = $_POST['dob'];
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dob)) {
            $error['dob'] = "Enter a valid date of birth (YYYY-MM-DD)";
        }
    } 
    else 
    {
        $error['dob'] = 'Enter your date of birth';
    }

    if(count($error)==0)
    {
        // process to login with database
        try
        {
        $a= new mysqli('localhost','root','','db_pkmc_apra');
        //print_r($a);

        echo $sql ="insert into tbl_users(id,name,address,phone,email,password,dob)
        values($id, '$name','$address','$phone','$email','$password','$dob')";
    
        $a->query($sql);

        if($a->affected_rows==1)
        {
            echo"sign up success";
        }
        else
        {
            echo"sign up failed";
        }
        }   
        catch(Exception $e)  
        {
            echo 'error'. $e->getMessage();
        }  
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>

        fieldset
        {   margin:auto;
            background-color: beige;
            width:50px;
        }
        </style>

</head>

<body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>Form</legend>

            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" value="<?php echo isset($id)?$id:''?>"/>
                <span style="color: red"><?= isset($error['id']) ? $error['id'] : '' ?></span>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo isset($name)?$name:''?>"/>
                <span style="color: red"><?= isset($error['name']) ? $error['name'] : '' ?></span>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo isset($address)?$address:''?>"/>
                <span style="color: red"><?= isset($error['address']) ? $error['address'] : '' ?></span>
            </div>

            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" id="phone" name="phone" value="<?php echo isset($phone)?$phone:''?>"/>
                <span style="color: red"><?= isset($error['phone']) ? $error['phone'] : '' ?></span>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo isset($email)?$email:''?>"/>
                <span style="color: red"><?= isset($error['email']) ? $error['email'] : '' ?></span>
            </div>

            <div class="form-group">
                <label for="password">password:</label>
                <input type="text" id="password" name="password" value="<?php echo isset($password)?$password:''?>"/>
                <span style="color: red"><?= isset($error['password']) ? $error['password'] : '' ?></span>
            </div>

            <div class="form-group">
                <label for="dob">DOB:</label>
                <input type="date" id="dob" name="dob" value="<?php echo isset($dob)?$dob:''?>"/>
                <span style="color: red"><?= isset($error['dob']) ? $error['dob'] : '' ?></span>
            </div>

            <button type="submit">Register</button>
        </fieldset>
    </form>
</body>
</html>