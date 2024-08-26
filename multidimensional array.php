<?php
$marks=
[
[12,8,'ram'] ,
[2,28,'sita'],
[29,58,'shyam'],
[88,9,'car']
];
?>


<table border="1">
<tr>
        <th>SN</th>
        <th>Code</th>
        <th> Name</th>
</tr>
<?php 
for($i=0 ; $i<count($marks); $i++)

{?>
<tr>
    <td><?php echo ($marks[$i][0]) ?></td>
    <td><?php echo ($marks[$i][1]) ?></td>
    <td><?php echo ($marks[$i][2])?></td>

<?php } ?>
</tr>
</table>

    

