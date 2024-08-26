<?php
function checkEmptyField($index)
{
    if(isset($_POST[$index]) && !empty($_POST[$index]) && trim($_POST[$index]))
    {
        return true;
    }
     else 
     {
        return false;
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

function validateEmail($data)
{
    if(filter_var($data,FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }
}


//function validatePattern($data, $pattern)://
// This line defines a function named validatePattern 
//that takes two parameters:
/*$data: The string you want to validate.
$pattern: The regular expression pattern against which $data will be checked.
*/
function validatePattern($data,$pattern)
{
    if(preg_match($pattern,$data)){
        return true;
    } 
    else 
    {
        return false;
    }
}

/*
$pattern = '/^[A-Z][a-z]{5,20}$/';
$name = "Aprajita";

if (validatePattern($name, $pattern)) {
    echo "Valid name";
} else {
    echo "Invalid name";
}*/
function checkValidUser($username,$password)
{
    if ($username == 'Admin' && $password =='Admin123')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkValidUser1($username, $password)
$users =[
    ['username' => 'admin', 'password' => 'admin123'],
    ['username' => 'ram','password'=> 'ram123'],
    ['username' => 'editor','password' =>'editor123'],
    ['username'=> 'subadmin','password' =>'subadmin123'],
];
foreach ($users as $key => $user)
{
    if($username == $user['username'] && $password == $user['password'])
    {
        return true;
    }
}
return false;

function addCategory()
{
    try 
    {
$connect = new mysqli('localhost', 'root', '', 'db_pkmc_apra');
$insertsql ="insert into book_category(title ,rank,status) values( "$title" ,$rank , $status )";
$connect ->query($insertaql);
if($connect ->insert_id >0 && $connect )
    }
}

if (count($err) ==0)
{
    if(addCategory($title ,$rank ,$status))
    {
        echo "category add sucess";
    }
    else{
        $err['message']
    }
}

?>