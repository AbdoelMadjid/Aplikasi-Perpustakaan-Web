<?php
$id_transaksi	= isset($_GET['id_trans']) ? $_GET['id_trans'] : "";
$judul			= isset($_GET['judul']) ? $_GET['judul'] : "";
$tgl_kembali	= isset($_GET['kembali']) ? $_GET['kembali'] : "";
$lambat			= isset($_GET['lambat']) ? $_GET['lambat'] : "";



if($lambat > 7) {
	echo "<script>alert('Buku yang dipinjam tidak dapat diperpanjang, karena sudah terlambat lebih dari 7 hari. Kembalikan dahulu, kemudian pinjam kembali !');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
} else {
	include "../include/koneksi_db.php"; 
	include "../transaksi/link.php";

	$pecah			= explode("-",$tgl_kembali);
	$next_7_hari	= mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
	$hari_next		= date("d-m-Y", $next_7_hari);


	$update_tgl_kembali=mysql_query("UPDATE trans_pinjam SET tgl_kembali='$hari_next' WHERE id='$id_transaksi'");

	if ($update_tgl_kembali) {
		echo "<script>alert('Berhasil diperpanjang....');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	} else {
		echo "<script>alert('Gagal diperpanjang');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	}
}
?>