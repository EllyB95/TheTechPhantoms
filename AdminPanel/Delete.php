<?php
	include_once '../php/config.php';
	$query = "DELETE FROM cmhauser WHERE cmhauserid='" . $_GET["cmhauserid"] . "'";
	if($result = pg_query($query)){
		echo "Data Deleted Successfully.";
	}
	else{
		echo "Error.";
	}
?>