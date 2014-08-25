<?php
include "../include/koneksi_db.php";
include "../anggota/link.php";

$id		= isset($_GET['id']) ? $_GET['id'] : "";

if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=lihat_anggota.php'>";
} else {
	
	$query		= mysql_query("SELECT * FROM data_anggota WHERE id=$id", $konek);
	$hasil		= mysql_fetch_array($query);
	$id  		= $hasil['id'];
	$nama 		= $hasil['nama'];
	$jk	= $hasil['jk'];
	$kelas	= $hasil['kelas'];
	$ttl	= $hasil['ttl'];
	$alamat		= $hasil['alamat'];
//	$foto_agt	= '<img width="280" height="320" src="data:image/jpeg;base64,'.base64_encode( $hasil['imageData'] ).'"/>';
}
?>

<form method="post" action="?page=act_edit_anggota">
<table width=100% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<tr><td class="head-data" colspan="2">Edit Data Anggota : <?php echo $nama; ?></td></tr>
<tr><td class="pinggir-data">Nama Anggota</td>
<td class="pinggir-data"><input type="text" size="55" name="nama" value="<?php echo $nama; ?>"></td></tr>
<tr><td class="pinggir-data">Gender</td>
<td class="pinggir-data"><select name="jk"><option value="L">Laki-Laki</options><option value="P">Perempuan</options><option value="<?php echo $jk; ?>"></option>
<tr><td class="pinggir-data">Jenis Kelamin</td>
<td class="pinggir-data"><input type="text"  size="35" name="jk" value="<?php echo $jk; ?>"></td></tr>
<tr><td class="pinggir-data">Kelas</td>
<td class="pinggir-data"><input type="text" size="40"name="kelas" value="<?php echo $kelas; ?>"></td></tr>
<tr><td class="pinggir-data">Tempat Tanggal Lahir</td>
<td class="pinggir-data"><input type="text" size="55" name="ttl" value="<?php echo $ttl; ?>"></td></tr>
<tr><td class="pinggir-data">Alamat</td>
<td class="pinggir-data"><input type="text" size="100" name="alamat" value="<?php echo $alamat; ?>"></td></tr>
<tr><td class="head-data" colspan="2" align="center"><input type="submit" value="Update Data"></td></tr>
</td></tr>
</table>
</form>