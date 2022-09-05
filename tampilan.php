<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Biodata Singkat</h2>
        <?php
            session_start();

            echo 'Halo Perkenalkan Nama Saya '.$_SESSION['nama'].'<br>'. ' Dengan Nim '.$_SESSION['nim'].'<br>';
            echo 'Saya dari Prodi '.$_SESSION['prodi'].'<br> Angkatan '.$_SESSION['angkatan'].'<br> yang menandakan bahwa saya adalah '.$_SESSION['flag'].'<br>';
            echo 'Minat bahasa pemrograman favorit saya adalah '.$_SESSION['bahasa']. '<br> serta Mata Kuliah Kesukaan saya yaitu '.$_SESSION['basa']; 
        ?>
    </div>
</body>
</html>