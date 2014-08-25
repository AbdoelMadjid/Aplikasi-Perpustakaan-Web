<?php

include "../buku/link.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

//tampilkan form pencarian
//echo "<center><form action='' method='post'><input type='text' name='cari' value='Pencarian...' onfocus=\"this.value='';\" onblur=\"if(this.value=='') this.value='Pencarian...';\">&nbsp;&nbsp;<input type='submit' value='go' name='go'>&nbsp;&nbsp;&nbsp;*) masukkan nama pengarang ATAU judul buku</form></scenter>";

//variabel _GET /
$hal	= isset($_GET['hal']) ? $_GET['hal'] : "";


//variabel _POST 
$cari	= isset($_POST['cari']) ? $_POST['cari'] : "";
$go		= isset($_POST['go']) ? $_POST['go'] : "";


$per_halaman	= 10;   // jumlah record data per halaman

if ($hal==""||$hal==1) {
	$awal=0;
} else {
	$awal=($hal*$per_halaman)-$per_halaman;
}
$batas=$per_halaman;
$batas=($hal*2)+$per_halaman;



if ($go == "go" && $cari != "Pencarian...") {
	$query		= mysql_query("SELECT * FROM data_buku WHERE pengarang LIKE '%$cari%' OR judul LIKE '%$cari%'", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
} else if ($go == "" || $cari == "Pencarian...") {
	$query		=mysql_query("SELECT * FROM data_buku ORDER BY id LIMIT $awal,$batas", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
}


$query2=mysql_query("SELECT * FROM data_buku");
$jumlah_buku=mysql_num_rows($query2);
$jum_halaman=ceil($jumlah_buku/$per_halaman);
//echo $jum_halaman;


if ($jum_halaman==1) { // ||$jm_cari<=10
echo "";
} else {
echo "<center><font size='3px'>Halaman : </font>";
for ($i=1; $i<=$jum_halaman; $i++) {
	if ($i==$hal) {
	echo "<font size='4px' color='green'>[<a href='?page=buku&hal=$i'><b>$i</b></a>]</font>";
	} else {
	echo "<font size='2px' color='red'>[<a href='?page=buku&hal=$i'><b>$i</b></a>]</font>";
	}
}
echo "</center><hr>";
}
?>
<table class="table-data" border=1 width=100% border=0 >
<tr><td class="td-data" colspan="7"><b>Jumlah Pencarian : <?php if ($j_cari==0) {echo "0";} else { echo $j_cari; } ?> eks. | Jumlah Keseluruhan Buku : <?php echo $jumlah_buku; ?> eks.</b></td></tr>
<tr><td class="head-data">Judul</td><td class="head-data">Pengarang</td><td class="head-data">Penerbit</td><td class="head-data">Jumlah</td><td class="head-data">Lokasi</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'><a href='?page=detil_buku&judul=$hasil[judul]'>$hasil[judul]</a></td>
      <td class='td-data'>$hasil[pengarang]</td>
	  <td class='td-data'>$hasil[penerbit]</td>
	  <td class='td-data'>$hasil[jumlah_buku]</td>
	  <td class='td-data'>$hasil[lokasi]</td>
	  <td class='td-data'><a href='?page=edit_buku&id=$hasil[id]'><img class='img_link' src='../image/edit.png' width='15px' height='15px'></a></td>
	  <td class='td-data'><a href='?page=act_hapus_buku&id=$hasil[id]' onclick='return confirm(\"Anda yakin ingin menghapus data buku $hasil[judul] ?\")'><img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td></tr>";
}
?>
</table>