<?php

include "../anggota/link.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

$query=mysql_query("SELECT * FROM data_anggota ORDER BY id", $konek);
$jumlah_anggota=mysql_num_rows($query);
?>
<table class="table-data" border=1 width=100% border=0 >
<tr><td class="td-data" colspan="8"><b>Jumlah Pencarian : <?php if ($j_cari==0) {echo "0";} else { echo $j_cari; } ?> orang. | Jumlah Keseluruhan Anggota : <?php echo $jumlah_anggota; ?> orang.</b></td></tr>
<tr><td class="head-data">Nama</td><td class="head-data">Jenis Kelamin</td><td class="head-data">Kelas</td><td class="head-data">Tempat Tanggal Lahir</td><td class="head-data">Alamat</td><td class="head-data">Foto Anggota</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'><a href='?page=detil_anggota&nama=$hasil[nama]'>$hasil[nama]</a></td>
      <td class='td-data'>$hasil[jk]</td>
	  <td class='td-data'>$hasil[kelas]</td>
	  <td class='td-data'>$hasil[ttl]</td>
	  <td class='td-data'>$hasil[alamat]</td>
  	  <td class='td-data'>$hasil[ImageData]</td>
	  <td class='td-data'><a href='?page=edit_anggota&id=$hasil[id]'><img class='img_link' src='../image/edit.png' width='15px' height='15px'></a></td>
	  <td class='td-data'><a href='?page=act_hapus_anggota&id=$hasil[id]' onclick='return confirm(\"Anda yakin ingin menghapus data anggota $hasil[nama] ?\")'><img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td></tr>";
}
?>
</table>