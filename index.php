<?php
$item = [
    'Haiwan' => [
        'kucing',
        'Tikus',
        'Ikan',
        'Monyet'

    ],
    'Bunga' => [
        'Ros',
        'Raya',
        'Orkid',
        'Magnolia'
    ],
    'Benda' => [
        'Botol',
        'Kerusi',
        'Meja',
        'Jam'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 1</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <h2>Table 1</h2>

    <table class="center">
        <?php
        foreach ($item as $myitem => $value) {
            echo "<tr> <th>$myitem</th>";

            foreach ($value as $list) {
                echo "<td>$list</td>";
            }
        }
        
        echo "</tr>"
        ?>
        <!--  <tr>
            <th>Item 1</th>
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
        </tr> 
        -->
    </table>
</body>

</html>