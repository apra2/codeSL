<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $error=[];
        if(isset($_POST['date1'])&&!empty($_POST['date1'])&&trim($_POST['date1']))
        {
        $date1 = strtotime($_POST['date1']);
 if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date1)) 
 {
            $error['date1']="Invalid date format. Please use YYYY-MM-DD.";
        }
     }
      else {
            echo "Your age is: " . $diff . " years";
        }


        if(isset($_POST['date2'])&&!empty($_POST['date2'])&&trim($_POST['date2']))
        {
        $date2 = strtotime($_POST['date2']);
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date2)) {
            $error['date2']="Invalid date format. Please use YYYY-MM-DD.";
        }
     }
      else {
            echo "Your age is: " . $diff . " years";
        }
            if($date1 > $date2){
                    $diff=(int)$date1-$date2;
                    }
                    else
                    {
                    $diff=(int)$date2-$date1;
                    }
                    echo "The age difference is :". round((int)$diff/(365*24*60*60));
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age gap</title>
</head>
<body>
    <form action="#">
        <fieldset>
            <legend> Age </legend>
    <label for="birthdate">Enter your birthdate (YYYY-MM-DD):</label>
        <input type="date" id="birthdate" name="date1" required> <br>


        <label for="birthdate">Enter your birthdate (YYYY-MM-DD):</label>
        <input type="date" id="birthdate" name="date2" required> <br>

        <input type="submit" value="Calculate Age">

    </form>
    </fieldset>
</body>
</html>