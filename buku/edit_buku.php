<?php
include "../include/koneksi_db.php";
include "../buku/link.php";

$id		= isset($_GET['id']) ? $_GET['id'] : "";

if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_buku.php'>";
} else {
	$query		= mysql_query("SELECT * FROM data_buku WHERE id=$id", $konek);
	$hasil		= mysql_fetch_array($query);
	$id  		= $hasil['id'];
	$jdl 		= $hasil['judul'];
	$pengarang	= $hasil['pengarang'];
	$t_terbit	= $hasil['th_terbit'];
	$penerbit	= $hasil['penerbit'];
	$isbn		= $hasil['isbn'];
	$jumlah_halaman = $hasil['kategori'];
	$klas		= $hasil['kode_klas'];
	$jum 		= $hasil['jumlah_buku'];
	$lok		= $hasil['lokasi'];
	$asal		= $hasil['asal'];
	$cNumber	= $hasil['cNumber'];
	$jum_temp	= $hasil['jum_temp'];
}
?>

<form method="post" action="?page=act_edit_buku">
<table width=100% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<tr><td class="head-data" colspan="2">Edit Data Buku : <?php echo $jdl; ?></td></tr>
<tr><td class="pinggir-data">Judul Buku</td>
<td class="pinggir-data"><input type="text" size="65" name="judul" value="<?php echo $jdl; ?>"></td></tr>
<tr><td class="pinggir-data">Pengarang</td>
<td class="pinggir-data"><input type="text"  size="65" name="pengarang" value="<?php echo $pengarang; ?>"></td></tr>
<tr><td class="pinggir-data">Tahun Terbit</td>
<td class="pinggir-data"><input type="text" size="15"name="terbit" value="<?php echo $t_terbit; ?>"></td></tr>
<tr><td class="pinggir-data">Penerbit</td>
<td class="pinggir-data"><input type="text" size="65" name="penerbit" value="<?php echo $penerbit; ?>"></td></tr>
<tr><td class="pinggir-data">ISBN</td>
<td class="pinggir-data"><input type="text" size="40" name="isbn" value="<?php echo $isbn; ?>"></td></tr>
<tr><td class="pinggir-data">Jumlah Halaman</td>
<td class="pinggir-data"><input type="text" size="20" name="jumlah_halaman" value="<?php echo $jumlah_halaman; ?>"></td></tr>
<tr><td class="pinggir-data">Klasifikasi Buku</td>
<td class="pinggir-data"><input type="text" size="20" name="kode_klas" value="<?php echo $klas; ?>"></td></tr>
<tr><td class="pinggir-data">Jumlah Buku</td>
<td class="pinggir-data"><input type="text" size="25" name="jum_buku" value="<?php echo $jum; ?>"></td></tr>
<tr><td class="pinggir-data">Lokasi</td>
<td class="pinggir-data"><input type="text" size="25"name="lok" value="<?php echo $lok; ?>"></td></tr>
<tr><td class="pinggir-data">Asal Perolehan</td>
<td class="pinggir-data"><input type="text" size="35" name="asal" value="<?php echo $asal; ?>"></td></tr>
<tr><td class="pinggir-data">Call Number</td>
<td class="pinggir-data"><input type="text" size="40" name="cNumber" value="<?php echo $cNumber; ?>"></td></tr>
<tr><td class="head-data" colspan="2" align="center">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
<?
?>