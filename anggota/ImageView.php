<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("tutorial_upload") or die(mysql_error());
if(isset($_GET['image_id'])) {
$sql = "SELECT imageType,imageData FROM data_anggota WHERE imageId=" . $_GET['image_id'];
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysql_fetch_array($result);
header("Content-type: " . $row["imageType"]);
echo $row["imageData"];
}
mysql_close($conn);
?>