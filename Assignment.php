<?php 
$Result=
[
    [1,'Aprajita',2,45,25,45,41,20],
    [2,'Sadikshya',23,5,8,45,60,88],
    [3,'Shyam',22,52,25,45,24,14],
    [4,'Mona',26,25,28,45,37,14],
    [5,'Soha',29,36,15,45,3,48],
    [6,'Lax',8,4,25,39,14,36],
    [7,'Rubi',4,52,25,41,8,47]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
    <style>
        table,tr,th,td
        {
        border-collapse: collapse;
        }

        .Pass
        {
            background-color:blue;
        }

        .Fail
        {
            background-color:pink;
        }
    </style>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
    <h1>Marks List</h1>
    <table border="2">
    <tr>
        <th> SN </th>
        <th> Name </th>
        <th> Roll </th>
        <th> SAD </th>
        <th> Web </th>
        <th> Stat </th>
        <th> DSA </th>
        <th> OOP </th>
        <th> Final</th>
        <th> Total</th>
        <th> Percent</th>
        <th> Division</th>
</tr>

<?php
for($i=0; $i<count($Result);$i++)
{
    $final='Fail';
    $total='-';
    $percent='-';
    $Division='-';


   if($Result[$i][3]>=30 && $Result[$i][3]>=30 && $Result[$i][3]>=30 && $Result[$i][3]>=30 && $Result[$i][3]>=30)
    {
        $final="Pass";
        $total=$Result[$i][3] +$Result[$i][4] +$Result[$i][5] +$Result[$i][6]+$Result[$i][3];
        $percent=round(($total/300)*100,2);
        
        if ($percent>=80)
        {
            $Division='Distinction';
        } 
        else if ($percent>=60  && $percent <80)
        {
            $Division='First Division';
        }
    }
    ?>
<tr class="<?php echo $final?>">
    <td> <?php echo ($Result[$i][0]) ?> </td>
    <td> <?php echo ($Result[$i][1]) ?> </td>
    <td> <?php echo ($Result[$i][2]) ?> </td>
    <td> <?php echo ($Result[$i][3]) ?> </td>
    <td> <?php echo ($Result[$i][4]) ?> </td>
    <td> <?php echo ($Result[$i][5]) ?> </td>
    <td> <?php echo ($Result[$i][6]) ?> </td>
    <td> <?php echo ($Result[$i][7]) ?> </td>
    <td> <?php echo $final?> </td>
    <td> <?php echo $total?> </td>
    <td> <?php echo $percent?> </td>
    <td> <?php echo $Division?> </td>
    <tr>      
    <?php 
    }?>
    </table>
    </body>
</html>


