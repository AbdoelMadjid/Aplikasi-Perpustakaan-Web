<?php
include "../include/koneksi_db.php";
include "../anggota/link.php";

$nama	= isset($_GET['nama']) ? $_GET['nama'] : "";
$query=mysql_query("SELECT * FROM data_anggota WHERE nama='$nama'", $konek);
$hasil=mysql_fetch_array($query);
?>
<table class="table-data" width=100% border=1>
	<table class="table-data" width=100% border=1>
	<tr><td colspan="2" class="head-data">Detail Anggota : "<?php echo $nama; ?>"</td></tr>
	<tr><td width="15%" class="pinggir-data">Nama</td><td width="85%" class="pinggir-data"><?php echo $hasil[2]; ?></td></tr>
    <tr><td class="pinggir-data">Jenis Kelamin</td><td class="pinggir-data"><?php echo $hasil[3]; ?></td></tr>
	<tr><td class="pinggir-data">Kelas</td><td class="pinggir-data"><?php echo $hasil[4]; ?></td></tr>
	<tr><td class="pinggir-data">Tempat Tanggal Lahir</td><td class="pinggir-data"><?php echo $hasil[5]; ?></td></tr>
	<tr><td class="pinggir-data">Alamat</td><td class="pinggir-data"><?php echo $hasil[6]; ?></td></tr>
  	<tr><td class="pinggir-data">Foto Anggota</td><td class="pinggir-data"><?php echo '<img width="280" height="320" src="data:image/jpeg;base64,'.base64_encode( $hasil['9'] ).'"/>';?>
</table>