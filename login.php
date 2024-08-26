<?php
if($_SERVER['REQUEST_METHOD']=='POST')
$error = [];

if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']))
 {
    $email = trim($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $error['email'] = "Enter a valid email address";
    }
} 
else 
{
    $error['email'] = 'Enter your email address';
}


if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) 
{
    $password =trim($_POST['password']);
    if (strlen($password)<4) 
    {
        $error['password'] = 'please create password';
    }
}
 else
  {
    $error['password'] = 'Enter your password';
}

if (count($error) == 0) 
{
    try
    {
       // require'connection1.php';
       //database connection
       $connection =  new mysqli('localhost', 'root', '', 'db_pkmc_apra');
        //query select data
        $sql = "select * from tbl_users where email='$email'and password='$password' ";

        //execute query and store result into result object
        $result = $connection->query($sql);

        //check number of rows selected by sql query
        if ($result->num_rows == 1) 
        {
            $row=$result->fetch_assoc();
        session_start();
        $_SESSION['tbl_users_id']=$row['id'];
    $_SESSION['tbl_users_email']=$row['email'];
    $_SESSION['tbl_users_password']=$row['password'];
    //redirect to next page


    if(isset($_POST['remember']))
    {
        //store data into cookie also
       setcookie('tbl_users_id',$row['id'],time()+7*24*60*60);
       setcookie('tbl_users_email',$row['email'],time()+7*24*60*60);
       setcookie('tbl_users_password',$row['password'],time()+7*24*60*60);
    }
    header('location:dashboard.php');
            //echo 'login success';
            // Redirect to listing_data.php
            //header('location:listing_data.php');
          //exit(); // Ensure no further output is sent
}
        else
         {
            echo 'login failed';
        }
    } 
    catch (Exception $e) 
    {
        die ('Error:' . $e->getMessage()); 
    }
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        h1 
        {
            text-align: center;
        }

        .field-group 
        {
            padding: 15px;
        }

        input 
        {
            width: 200px;
        }
    </style>
</head>
<body>
<h1>Login Form</h1>
<form action="#" method="post" name="login_form">
    <fieldset>
        <legend>Login Details</legend>

        <div class="field-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Email"
                   value="<?php echo isset($email) ? $email : '' ?>">
            <?php echo isset($error['email']) ? $error['email'] : '' ?>
        </div>

        <div class="field_group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" value="">
            <?php echo isset($error['password']) ? $error['password'] : '' ?>
        </div>
        <div class="form-group">
            <input type="checkbox" value="remember" name="remember">Remember me
    </br>
        <button type="submit">Login</button>
        <button type="reset">Clear</button>
    </fieldset>
</form>
</body>
</html>
