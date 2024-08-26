<?php

try // error ayo vani teslai report garnako lagi
{

// database connection
$f= new mysqli('localhost','root','','db_pkmc_apra');

// query select data
$sql= "SELECT * FROM  `tbl_1` order by name desc";

// select garesi execute garna paryo
 //execute query and store result in final object 

 $final=$f->query($sql);

// assign empty emp array to store all users

$emp=[];

// check the number of rows affected by  sql query

if($final->num_rows>0)
{
 // fetching assc array  while using loop
 while($record= $final->fetch_assoc())
 {
    array_push( $emp, $record);
 }
}

else
{
   echo "record Doesnot Match";
}
}
catch(Exception $em)
{
    echo'error:'.$em->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr,th,td
        {
       
        background-color: lavender;
        }

    </style>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      fieldset
       {
        margin: 0 auto;
        border: 12px;
        width: 20%;
        margin-bottom:2px;
       }

    legend 
    {
        font-weight: bold;
        width: 027.5%;
        color: red;
    }
</style>
</head>
<fieldset> 
<legend>Employee Details</legend> 
</fieldset>
<body>
    <table border="8">
    <thead>
    <tr>
        <th> id </th>
        <th> name </th>
        <th> phone </th>
        <th> dob </th>
        <th> hire_date </th>
        <th> position </th>
        <th> salary </th>
       
    </thead>
    <tbody>
        <?php foreach ($emp as $index => $users) 
{
?>
                  
                    <td><?php echo $users['id'] ?></td>
                    <td><?php echo $users['name'] ?></td>
                    <td><?php echo $users['phone'] ?></td>
                    <td><?php echo $users['dob'] ?></td>
                    <td><?php echo $users['hire_date'] ?></td>
                    <td><?php echo $users['position'] ?></td>
                    <td><?php echo $users['salary'] ?></td>
                </tr>
    <?php 
    }?>
    </tbody>
    </table>
    </body>
</html>


