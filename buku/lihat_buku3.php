<?php

include "../buku/link.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

$query=mysql_query("SELECT * FROM data_buku ORDER BY id", $konek);
$jumlah_buku=mysql_num_rows($query);
?>
<table class="table-data" border=1 width=100% border=0 >
<tr><td class="td-data" colspan="7"><b>Jumlah Keseluruhan Buku : <?php echo $jumlah_buku; ?> eksemplar</b></td></tr>
<tr><td class="head-data">Judul</td><td class="head-data">Pengarang</td><td class="head-data">Penerbit</td><td class="head-data">Jumlah</td><td class="head-data">Lokasi</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'><a href='?page=detil_buku&judul=$hasil[judul]'>$hasil[judul]</a></td>
      <td class='td-data'>$hasil[pengarang]</td>
	  <td class='td-data'>$hasil[penerbit]</td>
	  <td class='td-data'>$hasil[jumlah_buku]</td>
	  <td class='td-data'>$hasil[lokasi]</td>
	  <td class='td-data'><a href='?page=edit_buku&id=$hasil[id]'>Edit</a></td>
	  <td class='td-data'><a href='?page=act_hapus_buku&id=$hasil[id]' onclick='return confirm(\"Anda yakin ingin menghapus data buku $hasil[judul] ?\")'>Hapus</a></td></tr>";
}
?>
</table>