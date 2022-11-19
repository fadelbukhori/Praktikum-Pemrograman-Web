<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST KUY!</title>
</head>
<body>
    <?php 
        $nilai_1 = 10;
        $nilai_2 = 3;
        $nilai_3 = 2 * $nilai_1 + 8 * $nilai_2;
        echo "Nilai = ", $nilai_3;
        echo "<br>";
        $jumlah = $nilai_1 + $nilai_2;
        echo "Hasil dari $nilai_1 + $nilai_2 adalah : $jumlah";
        echo "<br><br>";
        echo "\"Nama : Fadel Bukhori Ferdianto\" <br>";
        echo "NIM : 2170231050";
    ?>
    <?php
        echo "<br>";
        echo "<br>";

        $a = 300.4;
        echo $a;

        echo "<br>";
        echo "Tipe Double ; ", doubleval($a), "<br>";
        echo "Tipe Integer ; ", intval($a), "<br>";
        echo "Tipe String ; ", strval($a);
        echo "<br>";
    
        echo "<br>";
        echo date("m-F-Y, g:i:s a");
        echo "<br>";
        echo date("m/F/Y, g:i:s a");
        echo "<br>";
        echo date("m.F.Y, g:i:s a");
    ?>
</body>
</html>