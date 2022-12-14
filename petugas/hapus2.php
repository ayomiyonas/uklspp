<?php
require_once '../database.php';
$db = new Database();
if(!isset($_POST['aksi'])){
    $aksi = $_GET['aksi'];
    if(isset($_GET['table'])){
        $aksi=$_GET['table'];
    }
}else {
    $aksi = $_POST('aksi');
}
elseif($aksi == "hapus"){
    $db->hapus($_GET['id'],$_GET['table'],$_GET['kolom']);
    header("location:index.php?hal=$hal")
}
?>