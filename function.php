<?php
/*Function : block of statetments
fucntion function_name(arguments)
/* yo xai dynamic banako */
/*pararmetrised function
function sum ($a , $b)
{
    
     $c = $a+$b;
     echo "sum is:" . $c . '<br />';
}
sum(20,90);
sum(20,98);
*/ 
 /*function sum ($a, $b)
 {
 return $a+$b; //function with return value
 }

 function average($total, $n)
 {
 return $total/$n;
 }
 $total=sum (50,120);
 echo "Total is :" .$total ;

 $avg = average($total,2);
 echo "<br /> Average is ". $avg ;
   

/* Default value  if value assign gareko xaina vani
 function sum ($a,$b,$c=0)
 {

    return $a+$b+$c; //function with return value
}

function average($total, $n=3)
{
return $total/$n;
}
$total=sum (50,120);
echo "Total is :" .$total ;

$avg = average($total,3);
echo "<br /> Average is ". $avg ;

*/

function sum (...$numbers)
{
    $m = 0;
    $numbers = func_get_args();
//print_r($numbers);
foreach ($numbers as $num)
{
    $m += $num;
} 
echo 'Sum is :'.$m;
}
sum(50,40,45); 
sum(23,45);
?>


