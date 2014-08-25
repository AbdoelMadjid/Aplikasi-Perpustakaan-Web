<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php
include "../edit_user.php"
$id	  = $_POST['id'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$hak  = $_POST['hak'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {

If ($user==""&&$pass==""&&$hak=="") {
Echo "Pengisian form belum benar. Ulangi lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=edit_user&id=$id'>";
} else {
$query = mysql_query("UPDATE admin SET username='$user', password='$pass', hak_akses='$hak' WHERE id='$id'", $konek);

If ($query) {
Echo "Data Anda berhasil diupdate<br>";
Echo "Username anda = <b>$user</b> dan password = <b>$pass</b><br>";
Echo "Terima kasih";
} else {
Echo "Data anda gagal diupdate. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=edit_user&id=$id'>";
}
}
}
?>
