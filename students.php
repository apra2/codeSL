<?php
require_once 'student function.php';
$error = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    if (empty($name)) {
        $error['name'] = "Please enter a valid name.";
    }

    $fee = $_POST['fee'];
    if (empty($fee) || !is_numeric($fee)) {
        $error['fee'] = "Please enter a valid fee.";
    }

    $rollNo = $_POST['roll_no'];
    if (empty($rollNo) || !is_numeric($rollNo)) {
        $error['roll_no'] = "Please enter a valid roll number.";
    }

    $phone = $_POST['phone'];
    if (empty($phone) || !preg_match('/^[0-9]{10}$/', $phone)) {
        $error['phone'] = "Please enter a valid 10-digit phone number.";
    }

    $course = $_POST['course'];
    if (empty($course)) {
        $error['course'] = "Please select a course.";
    }

    $address = $_POST['address'];
    if (empty($address)) {
        $error['address'] = "Please enter an address.";
    }

    $dob = $_POST['dob'];
    if (empty($dob)) {
        $error['dob'] = "Please select a date of birth.";
    }

    $status = $_POST['status'];
    if (!isset($status)) {
        $error['status'] = "Please select a status.";
    }

    // If no errors, proceed to insert data
    if (count($error) === 0) {
        $created_at = date('Y-m-d H:i:s');

        if (addStudent($name, $fee, $rollNo, $phone, $course, $address, $dob, $status, $created_at)) 
        {
            echo 'Student added successfully';
        } else {
            $error['message'] = "Student addition failed";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php echo printError($error, 'message'); ?>
    <form action="#" method="POST">
        <div class="form-group">
            <fieldset>
                <legend>Students Records</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
                <span id="nameError" class="error"><?php echo isset($error['name']) ? $error['name'] : ''; ?></span>
                <br>

                <label for="fee">Fee:</label>
                <input type="text" id="fee" name="fee" value="<?php echo isset($fee) ? $fee : ''; ?>">
                <span id="feeError" class="error"><?php echo isset($error['fee']) ? $error['fee'] : ''; ?></span>
                <br>

                <label for="roll_no">Roll no:</label>
                <input type="text" id="roll_no" name="roll_no" value="<?php echo isset($rollNo) ? $rollNo : ''; ?>">
                <span id="roll_noError" class="error"><?php echo isset($error['roll_no']) ? $error['roll_no'] : ''; ?></span>
                <br>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>">
                <span id="phoneError" class="error"><?php echo isset($error['phone']) ? $error['phone'] : ''; ?></span>
                <br>

                <label for="course">Course:</label>
                <select name="course" id="course">
                    <option value="">Select Course</option>
                    <option value="BCA" <?php echo (isset($course) && $course == 'BCA') ? 'selected' : ''; ?>>BCA</option>
                    <option value="BBA" <?php echo (isset($course) && $course == 'BBA') ? 'selected' : ''; ?>>BBA</option>
                    <option value="BIT" <?php echo (isset($course) && $course == 'BIT') ? 'selected' : ''; ?>>BIT</option>
                </select>
                <span id="courseError" class="error"><?php echo isset($error['course']) ? $error['course'] : ''; ?></span>
                <br>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo isset($address) ? $address : ''; ?>">
                <span id="addressError" class="error"><?php echo isset($error['address']) ? $error['address'] : ''; ?></span>
                <br>

                <label for="dob">DOB:</label>
                <input type="date" id="dob" name="dob" value="<?php echo isset($dob) ? $dob : ''; ?>">
                <span id="dobError" class="error"><?php echo isset($error['dob']) ? $error['dob'] : ''; ?></span>
                <br>
                <label for="status">Status:</label>
                <input type="radio" id="status-present" name="status" value="present" <?php echo (isset($status) && $status == 'present') ? 'checked' : ''; ?>>Present
                <input type="radio" id="status-absent" name="status" value="absent" <?php echo (isset($status) && $status == 'absent') ? 'checked' : ''; ?>>Absent
                <span id="statusError" class="error"><?php echo isset($error['status']) ? $error['status'] : ''; ?></span>
                <br>
                <input type="submit" value="Submit">
            </fieldset>
        </div>
    </form>
</body>
</html>