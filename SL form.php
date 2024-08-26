<?php 
$errors=[];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['Email']) &&  !empty($_POST['Email']) && trim($_POST['Email']) )
    {
        $email =$_POST['Email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $error['Email']="Enter valid email";
        }

        else 
        {
            $error['Email']="Enter your email please";
        }
    } 
    
     if(isset($_POST['Password']) && !empty($_POST['Password'])  && trim($_POST['Password']))
     {
        $password =$_POST['Password'];
        if (!preg_match('/^[A-Za-z]$/',$password))
        {
            $error['Password']="Enter valid Password";
        }

        else 
        {
            $error['Password']="Enter your Password please";
        }
     }
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <style>
form
{
    padding:2px;
    color: red;
    width:200px;
    background-color:pink;
}
button
{
     margin: 10px;
     color: blue;
     width: 70px;
}
    </style>
</head>
<body>
    <h1> Login Form</h1>
    <fieldset>
        <legend>Fill The Form</legend>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="post"> 
        <label for="Email"> Email:</label>
        <input type="text" id ="Email" name ="Email" value ="<?php echo isset($Email)? $Email:''?>"/>  <br>

        <label for=" Password">Password:</label>
        <input type="text" id ="Password" name ="Passoword" value ="<?php echo isset($Password)? $Password:'' ?>"/>
 <br>
        <button type ="submit"> Log In</button>

    </form>
</fieldset>
</body>
</html>