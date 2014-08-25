<?php
include "../anggota/link.php";
?>

<form name="frmImage" action="?page=act_input_anggota" method="post" enctype="multipart/form-data" class="frmImageUpload">
<table width=100% border=1 class="table-data">
<tr><td class="head-data" colspan="2">Tambah Anggota</td></tr>
<tr><td class="pinggir-data">Nama</td>
<td class="pinggir-data"><input type="text" name="nama" size="65"></td></tr>
<tr><td class="pinggir-data">Gender</td>
<td class="pinggir-data"><select name="jk"><option value="L">Laki-Laki</options><option value="P">Perempuan</options></select>
<tr><td class="pinggir-data">Kelas</td>
<td class="pinggir-data"><input type="text" name="kelas" size="15"></td></tr>
<tr><td class="pinggir-data">T T L</td>
<td class="pinggir-data"><input type="text" name="ttl" size="65"></td></tr>
<tr><td class="pinggir-data">Alamat</td>
<td class="pinggir-data"><input type="text" name="alamat" size="65"></td></tr>
<tr><td class="pinggir-data">Foto Anggota</td>
<td class="pinggir-data"><label>Upload Foto:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<tr><td class="head-data" colspan="2"><input type="submit" value="Simpan Data" class="btnSubmit"></td></tr>
</table>