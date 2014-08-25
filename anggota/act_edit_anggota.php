<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi2.php"; //memanggil file fungsi.php

//variabel _POST
$id		   = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$nama     = isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jk = isset($_POST['jk']) ? addslashes($_POST['jk']) : "";
$kelas    = isset($_POST['kelas']) ? addslashes($_POST['kelas']) : "";
$ttl  = isset($_POST['ttl']) ? addslashes($_POST['ttl']) : "";
$alamat	   = isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";

	if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";

	} else {
		$query = mysql_query ("UPDATE data_anggota SET nama='$nama', jk='$jk', kelas='$kelas', ttl='$ttl', alamat='$alamat'");

	if ($query) {
		echo "<script>alert('Data berhasil diupdate @ $hari_ini. Terima Kasih')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	} else {
		Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
		echo "<meta http-equiv='refresh' content='0; url=?page=edit_anggota&id=$id'>";
	}
}