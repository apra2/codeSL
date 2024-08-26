<?php
$a=
[
[12,8,'ram'] ,
[2,28,'sita'],
[29,58,'shyam'],
[88,9,'car']
];
/*echo $a[1][1];
echo' <pre>';
print_r($a);
echo '</pre>';*/
    
    /*echo $a[0][0] ." ";
    echo $a[0][1] ." ";
    echo $a[0][2] ." ";

     echo"<br>";
    echo $a[1][0] ." ";
    echo $a[1][1] ." ";
    echo $a[1][2] ." ";
    
    ho yesari garda dherai lamo huni vayo code so we use loop in this situation*/
?>
        <table border="5">
            <tr>
                <th> Money </th>
                <th> Age</th>
                <th> Name</th>
        </tr>
<?php
for($i=0; $i<count($a);$i++)
{
?>
<tr> 
    
    <?php
    for($j=0; $j< count($a[$i]); $j++)
    { 
    ?>
        <td>
            <?php 
            echo $a[$i][$j];
        ?>
        </td>
   <?php }
   ?>
    </tr>



<?php } ?>
</table>

