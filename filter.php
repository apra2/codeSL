<?php 
$errors=[];
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']))
 {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
        $error['email'] = "Sorry Your email is not valid";
    }
} 
else 
{
    $error['email'] = 'Enter your email address';
}


if (isset($_POST['Integer']) && !empty($_POST['Integer']) && trim($_POST['Integer']))
 {
    $Integer = $_POST['Integer'];
    if (!filter_var($Integer,FILTER_VALIDATE_INT))
     {
        $error['Integer'] = "Sorry Your Integer is not valid";
    }
} 
else 
{
    $error['Integer'] = 'Enter your Integer';
}


if (isset($_POST['Float']) && !empty($_POST['Float']) && trim($_POST['Float']))
 {
    $Float = $_POST['Float'];
    if (!filter_var($Float, FILTER_VALIDATE_FLOAT))
     {
        $error['Float'] = "Sorry Your Float is not valid";
    }
} 
else 
{
    $error['Float'] = 'Enter your Float';
}


if (isset($_POST['ip_address']) && !empty($_POST['ip_address']) && trim($_POST['ip_address']))
 {
    $ip_address = $_POST['ip_address'];
    if (!filter_var($ip_address, FILTER_VALIDATE_IP))
     {
        $error['ip_address'] = "Sorry Your ip_address is not valid";
    }
} 
else 
{
    $error['ip_address'] = 'Enter your IP Address';
}

if (isset($_POST['String']) && !empty($_POST['String']) && trim($_POST['String']))
 {
    $String = $_POST['String'];
    if (!filter_var($String, FILTER_SANITIZE_STRING)) // sanitize ko kam vaneko unwanted chararter like HTML tags lai hatauni
     {
        $error['String'] = "Sorry Your String is not valid";
    }
} 
else 
{
    $error['String'] = 'Enter your String ';
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter methods</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>Filter Var Functions</legend>
            <div class="form-group">
                <label for="email">Email:</label> <br>
                <input type="text" id="email" name="email"> <br>

                <label for="Integer">Integer:</label> <br>
                <input type="text" id="Integer" name="Integer"> <br>

                <label for="Float">Float:</label> <br>
                <input type="text" id="Float" name="Float"> <br>

                <label for="ip_address">IP Address:</label> <br>
                <input type="text" id="ip_address" name="ip_address"> <br>

                <label for="String">String:</label> <br>
                <input type="text" id="String" name="String"> <br>

                <button type="submit">Submit</button>
            </div>
        </fieldset>
    </form>
</body>
</html>

<!-- PHP .net -->