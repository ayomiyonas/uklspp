<?php 
require_once '../database.php';
$db = new Database();
if(!isset($_POST['aksi'])){
	$aksi = $_GET['aksi'];
	if(isset($_GET['table'])){
		$hal=$_GET['table'];	
	}
}else
	$aksi = $_POST['hapus'];
	$db->hapus($_GET['id'],$_GET['table'],$_GET['kolom']);
	header("location:index.php?hal=$hal")

?>
 