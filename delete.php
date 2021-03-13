<?php
require('config.php');
$id = $_GET['id'];
$del = $conn->query("DELETE FROM tb_ppdb WHERE id='$id'");
if($del){
	header('location:aboz.php');
}
?>