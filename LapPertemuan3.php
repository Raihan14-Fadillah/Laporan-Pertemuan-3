<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form name="diri" method="post" action="hasil.php">
            <h2>DATA DIRI PESERTA PAW 3C</h2>
            <h2>LAB TIA UTM</h2>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><input type="text" name="prodi" id="prodi"></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="text" name="ang" id="ang"></td>
                </tr>
                <tr>
                    <td>Bahasa Pemrograman Yang Diminati</td>
                    <td><select name="bahasa" id="bahasa">
                        <option value="pilih">Pilih</option>
                        <option value="Python">Python</option>
                        <option value="Html">HTML</option>
                        <option value="Java">Java</option>
                    </select></td>
                </tr>
                <tr><td colspan="2"><input type="submit" name="Log in" value="Log in"> <input type="reset" value="KOSONGKAN"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>