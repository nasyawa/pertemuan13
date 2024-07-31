<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET["nama"]) and isset($_GET["email"]) and isset($_GET["telp"])) {
        echo "Halllo " . $_GET["nama"] . "!! <br>";
        echo "Alamat emailmu : " . $_GET["email"] . "!!<br>";
        echo "No Telp : " . $_GET["telp"] . "!!<br>";
    } else{
        echo "Anda Harus mengakses halaman ini dari myform.html";
    }
    ?>

</body>

</html>