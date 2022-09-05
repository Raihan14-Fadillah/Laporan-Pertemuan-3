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
        <table>
            <tr>
                <td>Nama Lengkap </td>
                <td><div class="jw"><?php
                    $nama=$_POST['nama'];
                    print($nama);
                ?></div></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><div class="jw"><?php
                    $nim=$_POST['nim'];
                    print($nim);
                ?></div></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><div class="jw"><?php
                    $prodi=$_POST['prodi'];
                    print($prodi);
                ?></div></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><div class="jw"><?php
                    $angkatan=$_POST['ang'];
                    $m = array("18","2018","19","2019","20","2020","21","2021","22","2022");
                    for ($i=0; $i < count($m); $i++) { 
                        $flag = "none";
                        if($m[$i]==$angkatan){
                            if($i<=4){
                                $flag=" Angkatan Tua";
                            }else{
                                $flag=" Angkatan Muda";
                            }
                            break;
                        }else{
                            $flag=" Angkatan Unknown";
                        }
                    }    
                    print("Anda Adalah".$flag."<br>");
                ?></div></td>
                <tr>
                    <td>Bahasa Pemrograman Yang diminati</td>
                    <td><div class="jw"><?php
                        $bahasa=$_POST['bahasa'];
                        $n = array("Python","Html","Java");
                        for ($i=0; $i < count($n); $i++) { 
                            $basa = "none";
                            if($n[$i]==$bahasa){
                                if($i==0){
                                    $basa=" Alpro dan Strukdat";
                                }elseif($i==1){
                                    $basa=" PAW dan DPW";
                                }else{
                                    $basa=" PBO";
                                }
                                break;
                            }else{
                                $basa=" gaminat yaudah";
                            }
                        }    
                        print("Anda Pasti suka".$basa."<br>");
                        ?></div></td>
                </tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td><a href="tampilan.php">Cerita Singkat Mu</a></td>
                </tr>
            </tr>
        </table>
    </div>
    <?php
       session_start();
       
       $_SESSION['nama']=$nama;
       $_SESSION['nim']=$nim;
       $_SESSION['prodi']=$prodi;
       $_SESSION['angkatan']=$angkatan;
       $_SESSION['bahasa']=$bahasa;
       $_SESSION['flag']=$flag;
       $_SESSION['basa']=$basa;
    ?>
</body>
</html>