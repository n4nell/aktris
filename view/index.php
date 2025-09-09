<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Aktris</title>
</head>
<body>
<?php 
include_once __DIR__."/../view/daftar/view.php";
include_once __DIR__."/../view/utils/utils.php";
include_once __DIR__."/../controller/controller.php";
$p = new View();
$p->find();
?>

<table border="1">
<tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Negara</th>
    <th>Aktif</th>
</tr>
<?php $p->show(); ?>
</table>

</body>
</html>