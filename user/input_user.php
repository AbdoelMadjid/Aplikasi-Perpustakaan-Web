<?php include "../user/link.php"; ?>

<form method="post" action="?page=act_input_user">
<table class="table-data" width=100% border=1>
<tr><td colspan="2" class="head-data">Tambah User</td></tr>
<tr><td class="pinggir-data">Username</td><td class="pinggir-data"><input type="text" name="user"></td></tr>
<tr><td class="pinggir-data">Password</td><td class="pinggir-data"><input type="password" name="pass"></td></tr>
<tr><td class="pinggir-data">Hak Akses</td>
<td class="pinggir-data">
<select name="hak">
<option value="">--Pilih Hak Akses--</option>
<option value="1">Super User</option>
<option value="2">User Biasa</option>
</select>
</td></tr>
<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Daftar">
</td></tr>
</table>
</form>
