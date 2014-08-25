<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

$id_trans	= isset($_GET['id_trans']) ? $_GET['id_trans'] : "";
$judul		= isset($_GET['judul']) ? $_GET['judul'] : "";

if ($id_trans==""||$judul=="") {
	echo "<script>alert('Pilih dulu buku yang akan dikembalikan');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
} else {
	$us=mysql_query("UPDATE trans_pinjam SET status='kembali' WHERE id='$id_trans'")or die ("Gagal update".mysql_error());
	$uj=mysql_query("UPDATE data_buku SET jum_temp=(jum_temp+1) WHERE judul='$judul'")or die ("Gagal update".mysql_error());

	if ($us || $uj) {
		echo "<script>alert('Berhasil Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	} else {
		echo "<script>alert('Gagal Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	}
}
?>
