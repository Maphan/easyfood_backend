<?php
$db_name="easyfood";
$db_user="admin";
$db_pss="admin";

try {
	$sql = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8", $db_user, $db_pss);
}catch (PDOException $e) {
	echo "เกดิ ขอ้ ผดิ พลาด : " . $e->getMessage();
}

?>