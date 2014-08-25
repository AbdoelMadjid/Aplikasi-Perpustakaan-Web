<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("tutorial_upload");
$sql = "SELECT imageId FROM data_anggota ORDER BY imageId DESC"; 
$result = mysql_query($sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="../../Tutorial Upload/imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<?php
while($row = mysql_fetch_array($result)) {
?>
<img src="../../Tutorial Upload/imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br/>
<?php		
}
mysql_close($conn);
?>
</BODY>
</HTML>