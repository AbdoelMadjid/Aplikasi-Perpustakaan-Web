<?php 
	include "../laporan/lap.php";
?>
<table class="table-data">
	<tr><td class="head-data">Laporan Peminjaman</td></tr>
	<?php 
	include "../include/koneksi_db.php";
	include "kelas_siswa.php"; 
	echo "<tr><td class='td-data'>";
	
	
	$orang			= isset($_POST['kab']) ? $_POST['kab'] : "";
	$pminjam		=mysql_query("SELECT * FROM data_anggota WHERE nama = '$orang'", $konek);
	$pminjam_lkp	=mysql_fetch_array($pminjam);
	
	if ($orang=="") {
		echo "<table class='table-data' width='100%'>
		<tr><td class='head-data' colspan='4'>Data Anggota dan Pinjamannya</td></tr>
		<tr><td class='td-data' colspan='4'>-->>Silakan Pilih Kelas dan Anggota Terlebih Dahulu<<--</td></tr></table>";
	} else {
		print "&nbsp;<table class='table-data' width='100%'>
			<tr><td colspan=4 class='head-data'>Data Anggota : $orang</td></tr>
			<tr><td width='50%' class='pinggir-data' colspan='2'>Nama : <b>$pminjam_lkp[2]</b></td>
			<td width='50%' class='pinggir-data' colspan='2'>Alamat : <b>$pminjam_lkp[6]</b></td></tr>
			<tr><td width='50%' class='pinggir-data' colspan='2'>Kelas : <b>$pminjam_lkp[4]</b></td>
			<td class='pinggir-data' width='50%' colspan='2'>Nomor Induk : <b>$pminjam_lkp[1]</b></td></tr>";
	?>
<tr><td class="head-data" colspan="4">Buku Yang Dipinjam Oleh : <b><?php echo $orang; ?></b></td></tr>
<tr><td class="head-data">Buku Yang dipinjam</td><td class="head-data">Tanggal Pinjam</td><td class="head-data">Tanggal Kembali</td><td class="head-data">Keterangan</td></tr>
	<?php
	$query=mysql_query("SELECT * FROM trans_pinjam WHERE nama_peminjam='$orang' AND status='pinjam'", $konek) or die (mysql_error());
	$jum=mysql_num_rows($query);
	if ($jum==0) {
	echo "<tr><td class='td-data' colspan='4'>-- $orang Tidak Ada Data Pinjaman--</td></tr>";
	} else {
	while ($hasil=mysql_fetch_array($query)) {
	echo "<tr><td class='td-data'>$hasil[1]</td><td class='td-data'>$hasil[4]</td><td class='td-data'>$hasil[5]</td><td class='td-data'>$hasil[5]</td></tr>";
	}
	}
	}?>	
</table></td></tr></table>			