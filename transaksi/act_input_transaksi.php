<?php

$tgl_pinjam		= isset($_POST['pinjam']) ? $_POST['pinjam'] : "";
$tgl_kembali	= isset($_POST['kembali']) ? $_POST['kembali'] : "";
$dapat			= isset($_POST['buku']) ? $_POST['buku'] : "";
$pecah			= explode (".", $dapat);
$id				= $pecah[0];
$buku			= $pecah[1];
$siswa			= isset($_POST['peminjam']) ? $_POST['peminjam'] : "";
$ket			= isset($_POST['ket']) ? $_POST['ket'] : "";


if($buku == "" || $dapat == "") {
	echo "<script>alert('Pilih dulu BUKU-nya, Bos!!');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_transaksi'>";
} elseif ($siswa=="") {
	echo "<script>alert('Pilih dulu PEMINJAM-nya, Bos!!');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_transaksi'>";
} else {
	include "../include/koneksi_db.php";
	$query=mysql_query("SELECT * FROM data_buku WHERE judul = '$buku'", $konek);
	while ($hasil=mysql_fetch_array($query)) {
		$sisa=$hasil['jum_temp'];
	} 
	
	if ($sisa == 0) {
		echo "<script>alert('SORY BOS, Bukunya telah habis...!. Anda tidak bisa melakukan transaksi !');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	} else {
		$qt			= mysql_query("INSERT INTO trans_pinjam VALUES (null, '$buku', '$id', '$siswa', '$tgl_pinjam', '$tgl_kembali', 'pinjam', '$ket')", $konek) or die ("Gagal Masuk".mysql_error());

		$qu			= mysql_query("UPDATE data_buku SET jum_temp=(jum_temp-1) WHERE id=$id ", $konek);

		if ($qt&&$qu) {
			echo "<script>alert('Transaksi BERHASIL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
		} else {
			echo "<script>alert('Transaksi GAGAL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=input_transaksi'>";
		}
	}
}

?>
