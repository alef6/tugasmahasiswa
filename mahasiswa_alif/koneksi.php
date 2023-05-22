<?php
$koneksi = new PDO("mysql:host=localhost;dbname=db_belajar", "root", "");
$query=$koneksi ->query("select * from tb_siswa");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="koneksi.php">
</head>
<body>
    <table border="1">
        <tr>
            <th>nis</th>
            <th>nama</th>
        </tr>   
       <?php foreach($query as $q):?> 
        <tr>
            <td>    
                <?php echo $q["nis"]?>
            </td>
            <td>
                <?php echo $q["nama"]?>
            </td>
        </tr>
       <?php endforeach; ?> 
    </table>
</body>
</html>