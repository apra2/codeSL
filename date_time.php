<?php

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
1.time
2.strtotime     
3.date

<br>

<?php
$now = time();
echo $now;
echo '<br/>';
?>



<?php 
date_default_timezone_set('ASIA/KATHMANDU');
function printtime($time)
{
    echo $time;
    echo '<br/>';
}
$t = time()-7*24*60*60;
printtime($t); 

  $t = time()+20*24*60*60; //forward 
  printtime($t);

  //strong to time access function
//basic hamro used huni lang jastai now,today yeta uti use garma milxa 

$t = strtotime('now');
printtime($t);

$t = strtotime('today'); 
printtime($t);
 
$t = strtotime('+20 days');
printtime($t);

 $t =strtotime(' +2 hours');
 printtime($t);

 $t = strtotime('+3 hours 2 days');
 printtime($t);

 //date funtion to display date with format
 $d = date ('Y-m-d');
 printtime($d);

 $d = date ('Y-m-d',strtotime('+9 days'));
 printtime($d);

 $d = date('Y-m-d-H:i:s');
 printtime($d);
  ?>

  <?php
 $date1;
 $date2;
 $date1 =strtotime('2003-06-20');
 $date2 =strtotime('2024 -8-12');
 //find gap between them
if($date1 > $date2)
{
    $gap = $date1-$date2;
}

else{
    $gap = $date2-$date1;
}
$difference = (int)$gap/(24*60*60);
echo $difference;
echo round($difference, 0);

?>






 </body>
 </html>