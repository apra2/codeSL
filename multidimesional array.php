
<pre>
<?php
$data=
[
[ "ID" => "12", "Name" => "Ram ", "acc no"=> "001236458795698" ,"balance"=> "9800", "phone"=>"9841253699", "address"=>"patan"] ,
[ "ID" => "14", "Name" => "Hari ", "acc no"=> "0012364585495698" ,"balance"=> "8599", "phone"=>"9842369788", "address"=>"KTM"] 
];

print_r($data);
?>



<table border ="6" align="center" >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Account number</th>
        <th>Balance</th>
        <th>phone</th>
        <th>address</th>
    </tr>

    <?php 
for($i=0 ; $i<count($data); $i++)

{?>
<tr>
    <td><?php echo ($data[$i]['ID']) ?></td>
    <td><?php echo ($data[$i]['Name']) ?></td>
    <td><?php echo ($data[$i]['acc no'])?></td>
    <td><?php echo ($data[$i]['balance'])?></td>
    <td><?php echo ($data[$i]['phone'])?></td>
    <td><?php echo ($data[$i]['address'])?></td>

<?php } ?>
</tr> 
</table>
</pre>



<?php
 foreach ($data as $key => $data)
{
?>
<tr>
<td><?php echo $record ['ID'] ?></td>
<td> <?php echo $record ['Name']?></td>
<td><?php echo $record ['acc no'] ?></td>
<td><?php echo $record ['balance'] ?></td>
<td><?php echo $record ['phone'] ?></td>
<td><?php echo $record ['address'] ?></td>
</tr> 
<?php }?>
