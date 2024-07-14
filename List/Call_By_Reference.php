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
                function nilaiKuadrat (&$nilai){
                    $nilai = $nilai * $nilai ;
                }
                $bil = 3 ;
                echo " Nilai = " . $bil ;

                nilaiKuadrat($bil) ;
                echo " Nilai = " . $bil ;
                ?>
    </div>
</body>
</html>