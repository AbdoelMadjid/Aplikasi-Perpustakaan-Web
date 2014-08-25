<?php

$tahun	= date('Y'); //mendapatkan tahun sekarang
$bulan	= date('m'); //mendapatkan bulan sekarang
$tgl	= date('d'); //mendapatkan tanggal sekarang
$hari	= date('w'); //mendapatkan nama hari sekarang

switch ($hari) {
       case 1: $ha = "Senin"; break;
       case 2: $ha = "Selasa"; break;
       case 3: $ha = "Rabu"; break;
       case 4: $ha = "Kamis"; break;
       case 5: $ha = "Jum'at"; break;
       case 6: $ha = "Sabtu"; break;
       case 0: $ha = "Minggu"; break;
       }
switch ($bulan) {
       case 1: $bln = "Januari"; break;
       case 2: $bln = "Februari"; break;
       case 3: $bln = "Maret"; break;
       case 4: $bln = "April"; break;
       case 5: $bln = "Mei"; break;
       case 6: $bln = "Juni"; break;
       case 7: $bln = "Juli"; break;
	   case 8: $bln = "Agustus"; break;
       case 9: $bln = "September"; break;
       case 10: $bln = "Oktober"; break;
       case 11: $bln = "November"; break;
       case 12: $bln = "Desember"; break;
       }
$hari_ini	= $ha.", ".$tgl." ".$bln." ".$tahun;
?>