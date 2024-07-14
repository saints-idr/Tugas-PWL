<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- Main content here -->
        <?php
            $list_hari = array(
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jumat",
                "Sabtu",
                "Minggu",
            );
                //perulangan menggunakan foreach
                foreach($list_hari as $hari)
                {
                    //array $list_hari dipecah menjadi $hari
                    echo$hari . ", ";
                }

                //Senin, Selasa, Rabu, Kamis, Jumat, Sabtu, Minggu,
        ?>
    </div>
</body>
</html>
