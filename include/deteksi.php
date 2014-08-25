<SCRIPT type=text/javascript>
var months = new Array();
months[0] = "Januari";
months[1] = "Peburari";
months[2] = "Maret";
months[3] = "April";
months[4] = "Mei";
months[5] = "Juni";
months[6] = "Juli";
months[7] = "Agustus";
months[8] = "September";
months[9] = "Oktober";
months[10] = "Nopember";
months[11] = "Desember";
var currentDate = new Date();
var currentMonth = currentDate.getMonth();
var hariini=currentDate.getDate();
currentDate.setDate(1);
document.write("<br><br><table border=1 width='200px' bgcolor='#CCCCCC' cellpadding=2 cellspacing=0>"); 
document.write("<tr>");
document.write("<td colspan=7 bgcolor='#FFCC33' align='center'><strong>" + months[currentMonth] + "</td>");
document.write("<tr>");
document.write("<td bgcolor='#9999CC' align='center'>M</td>");
document.write("<td bgcolor='#9999CC' align='center'>S</td>");
document.write("<td bgcolor='#9999CC' align='center'>S</td>");
document.write("<td bgcolor='#9999CC' align='center'>R</td>");
document.write("<td bgcolor='#9999CC' align='center'>K</td>");
document.write("<td bgcolor='#9999CC' align='center'>J</td>");
document.write("<td bgcolor='#9999CC' align='center'>S</td>");
document.write("</tr>");
if (currentDate.getDay() != 0)
{
document.write("<tr>");
for (i = 0; i < currentDate.getDay(); i++)
{
document.write("<td>&nbsp;</td>");
}
}
while (currentDate.getMonth() == currentMonth)
{
if (currentDate.getDay == 0)
{
document.write("<tr>");
}

if (hariini==currentDate.getDate())
{
document.write("<td align='center' bgcolor='#FF9900'> <font color='#CC0000'><strong>" + currentDate.getDate() + "</strong></font></td>");
}
else
{
document.write("<td align='center'>" + currentDate.getDate() + "</td>");
}

if (currentDate.getDay() == 6)
{
document.write("</tr>");
}
currentDate.setDate(currentDate.getDate() + 1);
}
for (i = currentDate.getDay(); i <= 6; i++)
{
document.write("<td>&nbsp;</td>");
}
document.write("</font></table>");
</SCRIPT>
<?php
include "include/koneksi_db.php";

$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="db_perpus";

$konek = mysql_connect($db_hostname, $db_username, $db_password) or die ("Gagal koneksi ke server");

mysql_select_db($db_name, $konek)
   or die ("Gagal mengaktifkan database".mysql_error());
$hi		= date("Y-m-d");
$baris=mysql_query("SELECT * FROM pengunjung", $konek) or die (mysql_error());
$jumlah=mysql_num_rows($baris);

$hari_ini=mysql_query("SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$hi%'", $konek) or die (mysql_error());
$jh=mysql_num_rows($hari_ini);
$bulan= date("Y-m");
$bulan_ini=mysql_query("SELECT * FROM pengunjung WHERE tgl_kunjung LIKE '%$bulan%'", $konek) or die (mysql_error());
$jb=mysql_num_rows($bulan_ini);

echo "<br><table border='1' width='200px'><tr bgcolor='#909090'><td colspan='2'>Anda Pengunjung Ke - :</td></tr><tr><td>Hari ini</td><td align='center'><b>$jh</b></td></tr><tr><td>Bulan ini</td><td align='center'><b>$jb</b></td></tr></table>";

?>