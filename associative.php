
<?php
$Results = 
[
    ['SN' => 01, 'name' => 'Danniel', 'roll' => 89, 'SAD' => 85, 'DSA' => 85, 'Web' => 55, 'Stat' => 85],
    ['SN' => 02, 'name' => 'Sadikshya', 'roll' => 83, 'SAD' => 55, 'DSA' => 66, 'Web' => 55, 'Stat' => 55],
    ['SN' => 03, 'name' => 'Sam', 'roll' => 92, 'SAD' => 82, 'DSA' => 25, 'Web' => 35, 'Stat' => 39],
    ['SN' => 04, 'name' => 'Rushali', 'roll' => 72, 'SAD' => 92, 'DSA' => 95, 'Web' => 95, 'Stat' => 49],
    ['SN' => 05, 'name' => 'Raman', 'roll' => 2, 'SAD' => 22, 'DSA' => 85, 'Web' => 25, 'Stat' => 89]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,
        tr,
        th {
            background-color: yellow;
            
        }

        .pass 
        {
            background-color:skyblue;
        }
        .fail
        {
            background-color:red;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      fieldset
       {
        margin: 0 auto;
        border: 2px solid Green;
        width: 25%;
        margin-bottom:7px;
       }

    legend 
    {
        font-weight: bold;
        width: 27.5%;
        color: RED;
    }
</style>

</head>
<fieldset> 
<legend> Student Report Card</legend> 
<fieldset>
<body>
<table border="1">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll</th>
                <th>SAD</th>
                <th>DSA</th>
                <th>Web</th>
                <th>Stat</th>
                <th>Final</th>
                <th>total</th>
                <th>percent</th>
                <th>Division</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Results as $index => $mark) 
            {
                $total = $mark['SAD'] + $mark['DSA'] + $mark['Web'] + $mark['Stat'];
                $percent = round(($total / 400) * 100, 2);

                if ($mark['SAD'] >= 30 && $mark['DSA'] >= 30 && $mark['Web'] >= 30 && $mark['Stat'] >= 30) {
                    $Final = "Pass";
                } else {
                    $Final = "Fail";
                }

                if ($percent >= 80) {
                    $Division = 'Distinction';
                } else if ($percent >= 60 && $percent < 80) {
                    $Division = 'First Division';
                } else if ($percent >= 30 && $percent < 60) {
                    $Division = 'Second Division';
                } else if ($percent >= 25 && $percent < 30) {
                    $Division = 'Third Division';
                } else {
                    $Division = 'Fail';
                }
            ?>
                <tr <?php if ($Final == "Pass") echo 'class="pass"'; ?>>
                    <td><?php echo $index + 1 ?></td>
                    <td><?php echo $mark['name'] ?></td>
                    <td><?php echo $mark['roll'] ?></td>
                    <td><?php echo $mark['SAD'] ?></td>
                    <td><?php echo $mark['DSA'] ?></td>
                    <td><?php echo $mark['Web'] ?></td>
                    <td><?php echo $mark['Stat'] ?></td>
                    <td><?php echo $Final ?></td>
                    <td><?php echo $total ?></td>
                    <td><?php echo $percent ?></td>
                    <td><?php echo $Division ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
