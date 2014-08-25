<html>
<head>
<title>:: Sistem Informasi Perpustakaan ::</title>
<style type="text/css">
body {
	background-color: #f2f2f2;
	color: black;
	margin-top: 0px;
	margin-left: 50px;
	margin-right: 50px;
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-size: 14px;
	background-image: -webkit-linear-gradient(270deg,rgba(243,171,18,1.00) 0%,rgba(255,0,0,1.00) 100%);
	background-image: linear-gradient(180deg,rgba(243,171,18,1.00) 0%,rgba(255,0,0,1.00) 100%);
	text-shadow: 0px 0px;
}
</style>
</head>

<body>
<center>
<table border=0 width="900px" bgcolor="#D5D44E" colspan="0">
	<tr>
	<form action="login.php" name="login" method="post">
		<td style="background: #FF6700; padding: 8px 0 8px 0" colspan="2" align="right">
		Username : <input type="text" name="user" required> Password : <input type="password" name="pass" required> <input type="submit" value="Login">
		</td>
	</form>
	</tr>
	<tr>
		<td colspan="2" width="900px" height="200px"><img src="image/header.jpg" width="100%" height="180px"></td>
	</tr>
	<tr>
		<td colspan="2">
		<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
		<em><strong>:: Selamat Datang di Perpustakaan ::</strong></em>        </marquee></td>
	
	</tr>
	<tr>
	<td width="40%" valign="top" align="center"#F3AB12">
	<?php
	include "include/deteksi.php";
	?>
	</td>
	<td width="60%" style="background: #F3AB12">
	<?php
	include "pengunjung/pengunjung.php";
	include "include/fungsi2.php";
	?></td>
	<tr>
	<td colspan="2" style="background: #FF6700; border-top: solid 2px #f9f9f9; font-size: 12px" align="center">&copy; copyright : M Ansyori<a href="http://ansyori28.blogspot.com/" target="_blank"></a><br>All Right Reserved</td>
	</tr>
</table>
</center>