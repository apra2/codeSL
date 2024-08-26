<?php
require_once 'student function.php';
$error=[];
if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    if (deleteStudent($id)) 
    {
        $error['message'] = "Student delete success";
    } else {
        $error['message'] = "Student delete failed";
    }
}
$data= getAllStudents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Category List</h1>
    <table border="5" width ="85%">
        <tr>
            <td>SN</td>
            <td>name</td>
            <td>fee</td>
            <td>roll_no</td>
            <td>phone</td>
            <td>course</td>
            <td>address</td>
            <td>dob</td>
            <td>status</td>
            <td>created_at</td>
            <td>Action</td>
            <td>Edit Action</td>
        </tr>
        <?php foreach ($data as $key => $category)
        {?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $category['name'] ?></td>
            <td><?php echo $category['fee'] ?></td>
            <td><?php echo $category['roll_no'] ?></td>
            <td><?php echo $category['phone'] ?></td>
            <td><?php echo $category['course']  ?></td>
            <td><?php echo $category['address']  ?></td>
            <td><?php echo $category['dob'] ?></td>
            <td><?php echo printStatus($category['status']);?></td>
            <td><?php echo $category['created_at'] ?></td>
            <td>
                <a href="studentslist.php?id=<?php echo $category['id'] ?>"onclick="return confirm('Do you Really want to Delete?')">Delete the records</a>
            </td>
            <td>
            <a href="studentedit.php?id=<?php echo $category['id']?>">Edit The Records</a>
            </td>
        </tr>
<?php }?>    
</table> 
</body>
</html>