<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.M.I</title>
    <style>
        *{
            font-family: Verdana,Geneva,Tahoma, san-serif;
        }
     </style>
</head>
<body>
<h1> B.M.I </h1>

<?php
$berat = 60;
$tinggi = 1.6;
$bmi = 0;
?>

<table>
    <tr>
        <td>Berat:</td>
        <td><?php echo $berat; ?></td><br>
    </tr>

        <td>Tinggi:</td>
        <td><?php echo $tinggi; ?></td><br>
    </tr>

        <td>B.M.I:</td>
        <td><?php echo number_format(bmi($berat, $tinggi),2); ?></td>
    </tr>
    </table>
</body>
</html>


<?php
function bmi($berat , $tinggi) {
    $total = $berat / $tinggi;
    return $total;
}