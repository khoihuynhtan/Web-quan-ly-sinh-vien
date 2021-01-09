<?php
require_once('config.php');

/**
* insert, update, delete -> su dung function
*/
function execute($sql) {
	//create connection toi database
	$conn = mysqli_connect('$HOST', '$USERNAME', '$PASSWORD', '$DATABASE');

	//query
	mysqli_query($conn, $sql);

	//dong connection
	mysqli_close($conn);
}
?>
