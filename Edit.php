<?php
// error_reporting(0);
try{
    //database connection
    $connection =  new mysqli('localhost','root','','db_pkmc_apra');
    //query select data
    $sql = "select * from tbl_users order by name desc";
    //execute query and store resut into result object
    $result = $connection->query($sql);
    //assign empty users array to store all users
    $users = [];
    //check number of rows selected by sql query
    if ($result->num_rows > 0) {
        //fetch associative array using while loop
        while ($record = $result->fetch_assoc()) {
            //store all users data into $users array
            array_push($users,$record);
        }
        // $result->fetch_row();
        // $result->fetch_array();
        // $result->fetch_object();
    } else {
        echo 'Record not found';
    }
}catch(Exception $e){
    echo 'Error:' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users Data Loop</h1>
    <table border="1">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Password</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $index=> $user){ ?>
                <tr>
                    <td><?php echo $index + 1 ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['address'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['dob'] ?></td>
                    <td>
                    <a href="7.edit_data.php?id=<?php echo $user['id'] ?>" onclick="return confirm('are you sure?')" >Edit</a>
                        <a href="7.delete_data.php?id=<?php echo $user['id'] ?>" onclick="return confirm('are you sure?')" >Delete</a>
                    </td>
                </tr>
            <?php }  ?>
        </tbody>
    </table>
</body>
</html>
