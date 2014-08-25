<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php

$user = $_POST['user'];
$pass = $_POST['pass'];
$hak  = $_POST['hak'];

If ($user==""&&$pass==""&&$hak=="") {
Echo "Pengisian form belum benar. Ulangi lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
$query = mysql_query("INSERT INTO admin VALUES (null, '$user', '$pass', '$hak')", $konek);

If ($query) {
Echo "Data Anda berhasil dimasukkan<br>";
Echo "Username anda = <b>$user</b> dan password = <b>$pass</b><br>";
Echo "Terima kasih";
} else {
Echo "Data anda gagal dimasukkan. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
}
}
?>
