<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT</title>
</head>
<body>

    <center>
            <h1>Detail Data Siswa</h1>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td rowspan="4">
                    <img src="img/<?=$_GET["img"]?>.jpg" width="200">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $_GET["username"]?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $_GET["alamat"]?></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><?= $_GET["tlp"]?></td>
            </tr>
        </table>
    </center>
    
</body>
</html>