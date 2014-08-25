<?php
include "../laporan/lap.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

$bulan1= date("Y-m");
$query=mysql_query("SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$bulan1%' ORDER BY id", $konek);
?>
<table class="table-data" border=1 width="100%" align="left">
<tr><td class="head-data" colspan="6">Data Pengunjung bulan <?php echo date('F')." ".date('Y'); ?></td></tr>
<tr><td class="head-data">No</td><td class="head-data">Nama</td><td class="head-data">Gender</td><td class="head-data">Kelas</td><td class="head-data">Perlu</td><td class="head-data">Saran</td></tr>
<?php
$no=0;
while ($hasil=mysql_fetch_array($query)) {
$no++;
echo "<tr><td class='td-data'>$no</td>
      <td class='td-data'>$hasil[1]</td>
	  <td class='td-data'>$hasil[2]</td>
	  <td class='td-data'>$hasil[3]</td>
	  <td class='td-data'>$hasil[4]-$hasil[5]-$hasil[6]-$hasil[7]</td>
	  <td class='td-data'>$hasil[9]</td>
	  </tr>";
}
echo "</table>";
//akhir
$hi		= date("Y-m-d");
$baris=mysql_query("SELECT * FROM pengunjung", $konek) or die (mysql_error());
$jumlah=mysql_num_rows($baris);

$hari_ini=mysql_query("SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$hi%'", $konek) or die (mysql_error());
$jh=mysql_num_rows($hari_ini);

$bulan= date("Y-m");
$bulan_ini=mysql_query("SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$bulan%'", $konek) or die (mysql_error());
$jb=mysql_num_rows($bulan_ini);

echo "<br><table class='table-data' border='1' width='50%'>
<tr><td class=head-data colspan='2'>Data Pengunjung Per hari</td></tr>
<tr><td class='pinggir-data'>Total Pengunjung</td><td align='center' class='pinggir-data'><b>$jh</b></td></tr><tr><td class='pinggir-data'>Pengunjung bulan ini</td><td align='center' class='pinggir-data'><b>$jb</b></td></tr></table>";
//akhir
//$ta=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VII a' AND tgl_kunjung LIKE '%$bulan%'"));
//$tb=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VII b' AND tgl_kunjung LIKE '%$bulan%'"));
//$tc=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VII c' AND tgl_kunjung LIKE '%$bulan%'"));
//$da=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VIII a' AND tgl_kunjung LIKE '%$bulan%'"));
//$db=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VIII b' AND tgl_kunjung LIKE '%$bulan%'"));
//$dc=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VIII c' AND tgl_kunjung LIKE '%$bulan%'"));
//$sa=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='IX a' AND tgl_kunjung LIKE '%$bulan%'"));
//$sb=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='IX b' AND tgl_kunjung LIKE '%$bulan%'"));
//$sc=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='IX c' AND tgl_kunjung LIKE '%$bulan%'"));
//$g=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='Guru' AND tgl_kunjung LIKE '%$bulan%'"));
//$k=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='Karyawan' AND tgl_kunjung LIKE '%$bulan%'"));
//$l=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='Lain' AND tgl_kunjung LIKE '%$bulan%'"));
?>