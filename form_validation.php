<?php 
require_once "functionn.php";
// file is included only once
$err = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // Validate Name
    // name field empty xa ki xaina??
    if (checkEmptyField('name')) 
{
        $name = $_POST['name'];
        if (!validatePattern($name, '/^[A-Z][a-z]{5,20}$/')) 
        {
            $err['name'] = 'Enter a valid name. It should start with a capital letter and be 6-21 characters long.';
        }
} 
    else 
    {
        $err['name'] = 'Enter name';
    }

    // Validate Username
    if (checkEmptyField('username')) 
    {
        $username = $_POST['username'];
    } 
    else 
    {
        $err['username'] = 'Enter username';
    }

    // Validate Email
    if (checkEmptyField('email')) 
    {
        $email = $_POST['email'];
        if (!validateEmail($email)) 
        {
            $err['email'] = 'Enter a valid email';
        }
    } 
    else 
    {
        $err['email'] = 'Enter email';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Personal Information</legend>
            <div class="form-group">
                <label for="name">Enter Your Name:</label> <br>
                <input type="text" id="name" name="name"><br>
                <?php echo printError($err, 'name'); ?>
                <!--prints any error message associated
                with the name field by calling
                the printError function -->

                <label for="username">Enter Your Username:</label> <br>
                <input type="text" id="username" name="username"> <br>
                <?php echo printError($err, 'username'); ?>

                <label for="email">Enter Your Email:</label> <br>
                <input type="text" id="email" name="email"> <br>
                <?php echo printError($err, 'email'); ?>

                <button type="submit">Register</button>
            </div>
        </fieldset>
    </form>
</body>

</html>
