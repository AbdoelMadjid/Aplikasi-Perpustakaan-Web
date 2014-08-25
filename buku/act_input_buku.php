<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi2.php"; //memanggil file fungsi.php

$judul     = isset($_POST['judul']) ? addslashes($_POST['judul']) : "";
$pengarang = isset($_POST['pengarang']) ? addslashes($_POST['pengarang']) : "";
$terbit    = isset($_POST['terbit']) ? addslashes($_POST['terbit']) : "";
$penerbit  = isset($_POST['penerbit']) ? addslashes($_POST['penerbit']) : "";
$isbn	   = isset($_POST['isbn']) ? addslashes($_POST['isbn']) : "";
$kategori  = isset($_POST['kategori']) ? addslashes($_POST['kategori']) : "";
$klas	   = isset($_POST['klas']) ? addslashes($_POST['klas']) : "";
$jum_buku  = isset($_POST['jum_buku']) ? addslashes($_POST['jum_buku']) : "";
$lok	   = isset($_POST['lok']) ? addslashes($_POST['lok']) : "";
$asal	   = isset($_POST['asal']) ? addslashes($_POST['asal']) : "";
$CNumber	   = isset($_POST['cNumber']) ? addslashes($_POST['cNumber']) : "";
// $jum_temp  = isset($_POST['jumlah_tempat']) ? addslashes($_POST['jumlah_tempat']) : "";
$tgl	   = isset($_POST['judul']) ? addslashes($_POST['judul']) : "";

$tgl       = $hari_ini;

if ($judul==""||$pengarang==""||$terbit==""||$penerbit==""||$isbn==""||$kategori==""||$klas==""||$jum_buku==""||$lok==""||$asal=="") {
	echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
} else {
	$cek=mysql_query("SELECT * FROM data_buku WHERE judul='$judul'", $konek);
	$hasil_cek=mysql_num_rows($cek);

if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
mysql_connect($db_host,$db_user,$db_pass,$db_name);
mysql_select_db ("$db_name");
$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

	if ($hasil_cek>0) {
		echo "<script>alert('Data buku dengan judul $judul sudah ada')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=detil_buku&judul=$judul'>";
	} else {
		
$sql = "INSERT INTO `db_perpus`.`data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `cNumber`, `jum_temp`, `tgl_input`, `imageId`, `imageType`, `imageData`) VALUES (NULL, '$judul', '$pengarang', '$terbit', '$penerbit', '$isbn', '$kategori', '$klas', '$jum_buku', '$lok', '$asal', '$CNumber', '$jum_buku', NOW(), '{$imageProperties['mime']}', '{$imageProperties['mime']}', '{$imgData}')";

$current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());

if(isset($current_id)) {
			echo "<script>alert('Data berhasil ditambahkan @ $hari_ini. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
			echo mysql_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
		}
	}
}}}
?>