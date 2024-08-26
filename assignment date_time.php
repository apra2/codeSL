<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <form method="post">
        <label for="birthdate">Enter your birthdate (YYYY-MM-DD):</label>
        <input type="date" id="birthdate" name="birthdate" /> <br>
        <input type="submit" value="Calculate Age">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $birthdate = $_POST['birthdate'];
        
        $birthdateTimestamp = strtotime($birthdate);
        //string lai unix timestamp ma lani
        //the number of seconds since january 1,1970

      
        $currentTimestamp = time();
        //aheleko currentTimestamp get garni
        
         //calculate in seconds(gives age on seconds)
        $ageInSeconds = $currentTimestamp - $birthdateTimestamp;
       
        $ageInYears = $ageInSeconds / (365.25 * 24 * 60 * 60); 
        
        
        $age = floor($ageInYears); //round up garxa floor le
        
        echo "<p>Your age is: " . $age . " years.</p>";
    }
    ?>
</body>
</html>
