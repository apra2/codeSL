<?php
$subjects = array('OS', 'SL', 'NM', 'DBMS', 'SE');


echo
'<div style="display: flex; gap: 100px;">'; 

foreach ($subjects as $subject) 
{
    echo '<div style="border: 3px solid blue; padding: 25px; width: 100px; text-align: center;">' . $subject . '</div>';
}

echo '</div>'; 
?>
