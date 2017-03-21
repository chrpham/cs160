<?php
require "Config.php";

$sql = "select * from tickets";
$result = mysql_query($sql, $conn);
while($row = mysql_fetch_array($result)){
	$data[] = $row;
}
echo json_encode($data);
// close connection
mysql_close($conn);
?>
