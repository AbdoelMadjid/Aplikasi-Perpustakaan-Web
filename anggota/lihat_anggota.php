<?php

include "../anggota/link.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

//tampilkan form pencarian
//echo "<center><form action='' method='post'><input type='text' name='cari' value='Pencarian...' onfocus=\"this.value='';\" onblur=\"if(this.value=='') this.value='Pencarian...';\">&nbsp;&nbsp;<input type='submit' value='go' name='go'>&nbsp;&nbsp;&nbsp;*) masukkan nama pengarang ATAU nama anggota</form></scenter>";

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
	$query		= mysql_query("SELECT * FROM data_anggota WHERE nama LIKE '%$cari%' OR nama LIKE '%$cari%'", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
} else if ($go == "" || $cari == "Pencarian...") {
	$query		=mysql_query("SELECT * FROM data_anggota ORDER BY id LIMIT $awal,$batas", $konek);
	$j_cari		= mysql_num_rows($query);
	$jm_cari	= ceil($j_cari/$per_halaman);
}


$query2=mysql_query("SELECT * FROM data_anggota");
$jumlah_anggota=mysql_num_rows($query2);
$jum_halaman=ceil($jumlah_anggota/$per_halaman);
//echo $jum_halaman;


if ($jum_halaman==1) { // ||$jm_cari<=10
echo "";
} else {
echo "<center><font size='3px'>Halaman : </font>";
for ($i=1; $i<=$jum_halaman; $i++) {
	if ($i==$hal) {
	echo "<font size='4px' color='green'>[<a href='?page=anggota&hal=$i'><b>$i</b></a>]</font>";
	} else {
	echo "<font size='2px' color='red'>[<a href='?page=anggota&hal=$i'><b>$i</b></a>]</font>";
	}
}
echo "</center><hr>";
}
?>
<table class="table-data" border=1 width=120% border=0 >
<tr><td class="td-data" colspan="8"><b>Jumlah Pencarian : <?php if ($j_cari==0) {echo "0";} else { echo $j_cari; } ?> orang. | Jumlah Keseluruhan Anggota : <?php echo $jumlah_anggota; ?> orang.</b></td></tr>
<tr><td class="head-data">Nama</td><td class="head-data">Gender</td><td class="head-data">Kelas</td><td class="head-data">Tempat Tanggal Lahir</td><td class="head-data">Alamat</td><td class="head-data">Edit</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'><a href='?page=detil_anggota&nama=$hasil[nama]'>$hasil[nama]</a></td>
      <td class='td-data'>$hasil[jk]</td>
	  <td class='td-data'>$hasil[kelas]</td>
	  <td class='td-data'>$hasil[ttl]</td>
	  <td class='td-data'>$hasil[alamat]</td>
	  <td class='td-data'><a href='?page=edit_anggota&id=$hasil[id]'><img class='img_link' src='../image/edit.png' width='15px' height='15px'></a></td>
	  <td class='td-data'><a href='?page=act_hapus_anggota&id=$hasil[id]' onclick='return confirm(\"Anda yakin ingin menghapus data anggota $hasil[nama] ?\")'><img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td></tr>";
}
?>
</table>