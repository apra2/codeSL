<?php
// associative array//
$info=
[
    'name' =>'Ram',
    'age'=>20,
    'address'=>'pokhara'



];

/* echo'name is '. $info['name'];
 echo'age is'.$info['age'];
 echo'address is'.$info['address'];*/


 foreach ($info as $index => $data)
 {
    echo ucfirst($index).'is'.$data.'<br/>';
 }
?>

<table border="1">
    <?php foreach($info as $key => $value) 
    {?>
        <tr>
            <th> <?php echo ucfirst($key) ?></th>
            <td> <?php echo $value ?></td>
    </tr> 
    <?php }?>
    </table>
    foreach ($info as $index => $data)
 {
    echo ucfirst($index).'is'.$data.'<br/>';
 }
?>
    
   



