<?php

include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi2.php"; //memanggil file fungsi.php

$nama     	= isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jk			= isset($_POST['jk']) ? addslashes($_POST['jk']) : "";
$kelas    	= isset($_POST['kelas']) ? addslashes($_POST['kelas']) : "";
$ttl  		= isset($_POST['ttl']) ? addslashes($_POST['ttl']) : "";
$alamat	    = isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";

if ($nama==""||$jk==""||$kelas==""||$ttl==""||$alamat=="") {
	echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_anggota'>";
} else {
	$cek=mysql_query("SELECT * FROM data_anggota WHERE nama='$nama'", $konek);
	$hasil_cek=mysql_num_rows($cek);

	if ($hasil_cek>0) {
		echo "<script>alert('Data anggota dengan nama $nama pernah direkam !')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=detil_anggota&nama=$nama'>";

if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
mysql_connect($konek);
mysql_select_db ("$db_name");
$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
$sql = "INSERT INTO `db_perpus`.`data_anggota` (`id`, `no_induk`, `nama`, `jk`, `kelas`, `ttl`, `alamat`, `imageId`, `imageType`, `imageData`) VALUES (NULL, '', '$nama', '$jk', '$kelas', '$ttl', '$alamat', '{$imageProperties['mime']}', '{$imageProperties['mime']}', '{$imgData}')";
$current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
if(isset($current_id)) {
			echo "<script>alert('Data berhasil ditambahkan @ $hari_ini. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
			echo mysql_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_anggota'>";
}}}
?>