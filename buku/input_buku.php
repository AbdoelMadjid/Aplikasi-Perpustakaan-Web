<?php include "../buku/link.php"; ?>
<form name="frmImage" method="post" action="?page=act_input_buku" enctype="multipart/form-data" class="frmImageUpload">
<table width=100% border=1 class="table-data">
<tr><td class="head-data" colspan="2">Tambah Buku</td></tr>
<tr><td class="pinggir-data">Judul Buku</td>
<td class="pinggir-data"><input type="text" name="judul" size="65"></td></tr>
<tr><td class="pinggir-data">Pengarang</td>
<td class="pinggir-data"><input type="text" name="pengarang" size="65"></td></tr>
<tr><td class="pinggir-data">Tahun Terbit</td>
<td class="pinggir-data"><input type="text" name="terbit" size="15"></td></tr>
<tr><td class="pinggir-data">Penerbit</td>
<td class="pinggir-data"><input type="text" name="penerbit" size="65"></td></tr>
<tr><td class="pinggir-data">ISBN</td>
<td class="pinggir-data"><input type="text" name="isbn" size="40"></td></tr>
<tr><td class="pinggir-data">Jumlah Halaman</td>
<td class="pinggir-data"><input type="text" name="kategori" size="20"></td></tr>
<tr><td class="pinggir-data">Klasifikasi Buku</td>
<td class="pinggir-data"><input type="text" name="klas" size="20"></td></tr>
<tr><td class="pinggir-data">Jumlah Buku</td>
<td class="pinggir-data"><input type="text" name="jum_buku" size="10"></td></tr>
<tr><td class="pinggir-data">Lokasi</td>
<td class="pinggir-data"><input type="text" name="lok" size="65"></td></tr>
<tr><td class="pinggir-data">Asal Perolehan</td>
<td class="pinggir-data"><input type="text" name="asal" size="65"></td></tr>
<tr><td class="pinggir-data">Call Number</td>
<td class="pinggir-data"><input type="text" name="cNumber" size="40"></td></tr>
<tr><td colspan="2" align="center" class="head-data">
<tr><td class="pinggir-data">Foto Cover Buku</td>
<td class="pinggir-data"><label>Upload Foto Buku:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<tr><td class="head-data" colspan="2"><input type="submit" value="Simpan Data" class="btnSubmit"></td></tr>

</td></tr>
</table>
</form>
