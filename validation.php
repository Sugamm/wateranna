<?php

session_start();

include 'phpcode/dbconfig.php';
 $count = $_GET['c'];
 $time = $_GET['t'];
 $location = $_SESSION["location"];
if (isset($count) && isset($time)) {
	$price = $count * 30;
	$ins = "INSERT INTO orders(OrderCan, price, deliveryTime, location) VALUES ('".$count."', '".$price."','".$time."' ,'".$location."' )";
	$res = mysqli_query($conn,$ins);
	if (!$res) {
		echo mysqli_error($conn)." 404 ERROR : INSERT QUERY";
	}
	$sel = "SELECT id FROM orders where id='".mysqli_insert_id($conn)."'";
	$sees = mysqli_query($conn,$sel);
	$row = mysqli_fetch_array($sees);
	
	if ($row) {
		$_SESSION['orderId'] = $row['id'];
		header("location:sendmsg.php?id=".$row['id']);
		exit();
	}else{
		echo "id fetch problem";
		header("location:order.php");
		exit();
	}
	echo "count";
}else{

}
if (isset($_GET['uid']) && isset($_GET['phone']) && isset($_GET['uid'])) {
	$insertQuery = "INSERT INTO verifyCode(mobile, code, orderId) VALUES ('".$_GET['phone']."','".$_GET['code']."','".$_GET['uid']."')";
	$res = mysqli_query($conn,$insertQuery);
}else{
	header("location:order.php");
		exit();
}

?>