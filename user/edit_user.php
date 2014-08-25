<?php
include "../include/koneksi_db.php";
include "../user/link.php";

if ($id== "") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
$query=mysql_query("SELECT * FROM admin WHERE id=$id", $konek);
$hasil=mysql_fetch_array($query);
$id  =$hasil['id'];
$user=$hasil['username'];
$pass=$hasil['password'];
$hak =$hasil['hak_akses'];
?>

<form method="post" action="?page=act_edit_user">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table class="table-data" width=100% border=1>
<tr><td class="head-data" colspan="2">Edit User : <?php echo $user; ?></td></tr>
<tr><td class="pinggir-data">Username</td><td class="pinggir-data"><input type="text" name="user" value="<?php echo $user; ?>"></td></tr>
<tr><td class="pinggir-data">Password</td><td class="pinggir-data"><input type="password" name="pass" value="<?php echo $pass; ?>"></td></tr>
<tr><td class="pinggir-data">Hak Akses</td>
<td class="pinggir-data">
<select name="hak"><?php
if ($hak==1) {
$s="selected";
} else {
$u="selected";
}
?>
<option value="">--Pilih Hak Akses--</option>
<option value="<?php echo $s; ?>"Super User</option>
<option value="<?php echo $u; ?>"User Biasa</option>
</select>
</td></tr>
<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Daftar">
</td></tr>
</table>
</form>