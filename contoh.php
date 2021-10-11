<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <style>
        *{
            font-family: Verdana,Geneva,Tahoma, san-serif;
        }
     </style>
</head>
<body>
    <h1> CONTOH 1 </h1>

    <?php 
    $harga = 1.7;
    $berat = 2;
    ?>

    <p>
        Harga sekilogram buah betik adalah <?php echo number_format($harga,2); ?>
        <br>
        Untuk <?php echo $berat; ?>KG, total harga adalah 
        RM <?php echo number_format(kira($harga, $berat),2); ?>
    </p>

    <p><a href="bmi.php">B.M.I</a>;</p>
</body>
</html>

<?php
function kira($harga,$berat) {
    $total = $harga * $berat;
    return $total;
}
