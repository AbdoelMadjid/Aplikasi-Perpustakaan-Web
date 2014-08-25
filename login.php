<?php
session_start();
$_SESSION['sesi']	= NULL;

include "include/koneksi_db.php";

$user	= isset($_POST['user']) ? $_POST['user'] : "";
$pass	= isset($_POST['pass']) ? $_POST['pass'] : "";


$qry	= mysql_query("SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
$sesi	= mysql_num_rows($qry);

if ($sesi == 1) {
	$data_admin	= mysql_fetch_array($qry);
	
	$_SESSION['sesi'] = $data_admin['username'];
	
	echo "<script>alert('Anda berhasil Log In. Username : $sesi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=admin/index.php?user=$sesi'>";

} else {
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	echo "<script>alert('Anda Gagal Log In');</script>";
}

?>