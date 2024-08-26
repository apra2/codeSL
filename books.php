<?php
require_once 'book function.php';
$error = [];
print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // Validate Title
    if (isset($_POST['title']) && !empty($_POST['title']) && trim($_POST['title'])) {
        $title = $_POST['title'];
        if (!preg_match('/^[A-Za-z0-9]{3,15}$/', $title)) {
            $error['title'] = "Enter a valid title (3-15 alphanumeric characters)";
        }
    } else {
        $error['title'] = 'Enter your title';
    }

    // Validate Rank
    if (isset($_POST['rank']) && !empty($_POST['rank']) && trim($_POST['rank'])) {
        $rank = $_POST['rank'];
        if (!preg_match('/^[1-9][0-9]*$/', $rank)) {
            $error['rank'] = "Enter a valid rank (positive integer)";
        }
    } else {
        $error['rank'] = 'Enter your rank';
    }

    // Validate Status
    if (!isset($_POST['status'])) 
    {
        $error['status'] = "Select a status";
    } else {
        $status = $_POST['status'];
    }

    // If no errors, proceed to insert data

    // Validation...
    if (count($error) == 0) 
    {
print_r($error);

        $created_at = date('Y-m-d H:i:s');
        if (addCategory($title, $rank, $status, $created_at)) {
            echo 'Category added successfully';
        } else {
            $error['message'] = "Category addition failed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Categories</title>
</head>

<body>
<?php echo printError($error,'message'); ?>
    <form action="" method="post">
        <fieldset>
            <legend>Book Categories</legend>
            <div class="form-group">

                <label for="title">Title:</label>
                <input type="text" id="title" name="title"> <br>

                <label for="rank">Rank:</label>
                <input type="text" id="rank" name="rank"> <br>

                <label>Status:</label>
                <input type="radio" id="status_active" name="status" value="1">Active
                <input type="radio" id="status_deactive" name="status" value="0">Deactive <br>

                <button type="submit"> Buy The Book</button>
                
            </div>
        </fieldset>
    </form>
</body>

</html>