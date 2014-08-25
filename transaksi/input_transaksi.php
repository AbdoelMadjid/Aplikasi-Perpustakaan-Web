<?php
include "../transaksi/link.php";
$pinjam			= date("d-m-Y");
$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali		= date("d-m-Y", $tuju_hari);
?>

<form method="post" action="?page=act_input_transaksi">
<input type="hidden" name="pinjam" value="<?php echo $pinjam; ?>">
<input type="hidden" name="kembali" value="<?php echo $kembali; ?>">
<table border=1 width=100% class="table-data">
<tr><td class="head-data" colspan="2">Peminjaman Buku</td></tr>
<tr><td class="pinggir-data">Judul Buku</td>
<td class="pinggir-data">
<select name="buku">
<option value="" selected>------- Pilih Judul Bukunya -----</option>
<?php
include "../include/koneksi_db.php";
$q=mysql_query("SELECT * FROM data_buku ORDER BY id", $konek);
while ($buku=mysql_fetch_array($q)) {
echo "<option value='$buku[0].$buku[1]'>$buku[0]. $buku[1]</option>";
}
?>
</select> <a href="?page=input_buku">Tambah Buku Baru</a>
</td></tr>

<tr><td class="pinggir-data">Nama Peminjam</td>
<td class="pinggir-data">
<select name="peminjam">
<option value="" selected>------- Pilih Nama Peminjamnya -----</option>
<?php
$qa=mysql_query("SELECT * FROM data_anggota ORDER BY id", $konek);
while ($anggota=mysql_fetch_array($qa)) {
echo "<option value='$anggota[2]'>$anggota[0]. $anggota[2]</option>";
}
?>
</select>
</td></tr>


<tr><td class="pinggir-data">Tanggal Pinjam</td><td class="pinggir-data"><b><?php echo $pinjam; ?></b></td></tr>
<tr><td class="pinggir-data">Tanggal Kembali</td><td class="pinggir-data"><b><?php echo $kembali; ?></b></td></tr>
<tr><td class="pinggir-data">Keterangan</td>
<td class="pinggir-data"><input type="text" name="ket" size="40"></td></tr>

<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Input">
</td></tr>
</table>
</form>
