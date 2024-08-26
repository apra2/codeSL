<?php
echo"welcome to Nepal <br>";
// cerating 2 dimensional array
$multi=
                [
                [2,3,4],
                [5,8,9],
                [4,8,9]

                ];
  //echo var_dump($multi);   
 // echo $multi[0][0];   

            for($i=0; $i<count($multi); $i++)   
    {
            for($j=0; $j<count($multi[$i]);$j++)
            {
            echo $multi[$i][$j];
            echo " ";
            }
            echo"</br>";
    }
?>