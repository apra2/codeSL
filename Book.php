<?php
$Book=
[
    [2,'DSA','ram',225,96,85,"Dificult"],
    [20,'web','hari',22,9,8,22,"Easy"],
    [77,'maths','shyam',55,45,40,"Bored"],
    [36,'social','geeta',52,23,9,"Diplomatic"],
    [25,'java','sita',58,66,8,"Hard"],
    [55,'Nepali','harry',23,96,5,"fine"],
    [28,'english','orry',56,6,52,"good"]
];
?>
 <table border="1">
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Author</th>
        <th>Price</th>
        <th>Pages</th>
        <th>Stock</th>
        <th>review</th>
        
</tr>
<?php
for($i=0; $i<count($Book); $i++)
{?>
    <tr>
        <td><?php echo ($Book[$i][0]) ?></td>
        <td><?php echo ($Book[$i][1]) ?></td>
        <td><?php echo ($Book[$i][2])?></td>
        <td><?php echo ($Book[$i][3])?></td>
        <td><?php echo ($Book[$i][4])?></td>
        <td><?php echo ($Book[$i][5])?></td>
        <td><?php echo ($Book[$i][6])?></td>
        

    
    <?php } ?>
    </tr>
    </table>
        