<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
                function jumlahkan($x,$y) {
                    $hasil = $x + $y;
                    return $hasil ;
                }

                echo "Hasilnya = " . jumlahkan(10,2);
                $bil = 0 ;
                $bil = jumlahkan(9,9) ;
                echo " Hasilnya = " . $bil;
                ?>
    </div>
</body>
</html>