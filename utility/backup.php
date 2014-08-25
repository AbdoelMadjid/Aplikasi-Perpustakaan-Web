<?php

// membaca file koneksi.php
include "../include/koneksi_db.php";
include "link.php";
 
echo "<b>Backup Database Perpustakaan</b>";
echo "<br>Nama Database: ".$db_name;
echo "<br><i>Daftar Tabel</i>";
 
// query untuk menampilkan semua tabel dalam database
$query = "SHOW TABLES";
$hasil = mysql_query($query);
 
// menampilkan semua tabel dalam form
echo "<form method='post' action='../utility/proses.php'>";
echo "<table>";
while ($data = mysql_fetch_row($hasil))
{
   echo "<img src='../image/external3.gif'>  $data[0]<br>";
}
echo "</table><br>";
echo "<input type='submit' name='submit' value='Backup Data'>";
echo "</form>";

 
?>