<?php
require_once "functionn.php";
// file is included only once

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // Validate Username
    if (checkEmptyField('username')) 
    {
        $username = $_POST['username'];
    } 
    else 
    {
        $err['username'] = 'Enter username';
    }


    if (checkEmptyField('password')) 
    {
        $password = $_POST['password'];
    } 
    else 
    {
        $err['password'] = 'Enter password';
    }
    
}

if(count($err)==0)
{
    //logic to cehck username/password
    if(checkValidUser1($username , $password))
    {
        echo "sucess";
    }
    else
    {
        $srr['message']== "inavalid username/password";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>login</h1>
  
</body>
</html>