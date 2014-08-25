<?php

include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi.php";
include "../transaksi/link.php";

$query=mysql_query("SELECT * FROM trans_pinjam WHERE status='pinjam' ORDER BY id", $konek);
?>
<table border="1" width=100% class="table-data">
<tr><td class="head-data">No</td><td class="head-data">Judul Buku</td><td class="head-data">Id Buku</td><td class="head-data">Nama Peminjam</td><td class="head-data">Tgl. Pinjam</td><td class="head-data">Tgl Kembali</td><td class="head-data">Status<td class="head-data">Terlambat</td><td class="head-data">Kembali</td><td class="head-data">Perpanjang</td></tr>
<?php
$no=0;
while ($hasil=mysql_fetch_array($query)) {
$no++;
echo "<tr>
	  <td class='td-data'>$no</td>
      <td class='pinggir-data'>$hasil[1]</td>
	  <td class='td-data'>$hasil[2]</td>
	  <td class='td-data'>$hasil[3]</td>
	  <td class='td-data'>$hasil[4]</td>
	  <td class='td-data'>$hasil[5]</td>
	  <td class='td-data'>$hasil[6]</td>
	  <td class='td-data'>";

	    $tgl_dateline=$hasil['tgl_kembali'];
		$tgl_kembali=date('d-m-Y');
		$lambat=terlambat($tgl_dateline, $tgl_kembali);
		$denda=$lambat*$denda1;
		if ($lambat>0) {
		echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
		}
		else {
		echo $lambat." hari";
		}
echo "</td>
	  <td class='td-data'><a href='?page=act_kembali&id_trans=$hasil[id]&judul=$hasil[1]'>kembali</a></td>
	  <td class='td-data'><a href='?page=act_panjang&id_trans=$hasil[id]&judul=$hasil[1]&kembali=$hasil[5]&lambat=$lambat'>perpanjang</a></td>
	  </tr>";
}
?>
</table>