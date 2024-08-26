<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $data='cat';
    echo gettype($data);
    echo"<br />";

    $data=10;
    echo gettype($data);
    echo"<br />";

      $data=10.5;
      echo gettype($data);
      echo"<br />";

      $data='PKMC';
      echo gettype($data);
      echo"<br />";

      $data="dog";
      echo gettype($data);
      echo"<br />";


    $data=array('test','user');
    echo gettype($data);
    echo"<br />";

    $data= false;
    echo gettype($data);
    echo"<br />";

    class Student
    {
    }
        $data= new Student();
        echo gettype($data);
        echo"<br />";
         $data=fopen("first.php",'r');
         echo gettype($data);
         echo"<br />";


         $data=NULL;
         echo gettype($data);
         

    
    

      
    ?>
</body>
</html>



<!--class pani datatype vayeko vayaera PHP lai datatype chaidaina so object create garni bela class ko name chahiaina

ARRAY AND OBJECT xai complex Datatype
NULL datatype pani null nai hunxa->