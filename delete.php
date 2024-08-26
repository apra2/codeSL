<?php
// error_reporting(0);
    $id = $_GET['id'];
try
{
    //database connection
    $connection =  new mysqli('localhost','root','','db_pkmc_apra');
    //query select data
    $sql = "delete from tbl_users where id=$id";
    //execute query and store resut into result object
    $connection->query($sql);
    //assign empty users array to store all users
    $users = [];
    //check number of rows selected by sql query
    if ($connection->affected_rows == 1) 
    {
      echo 'User deleted';
      header('location:listing_data.php');
    } else {
        echo 'User delete failed';
    }
}
catch(Exception $e)
{
    echo 'Error:' . $e->getMessage();
}
?>
