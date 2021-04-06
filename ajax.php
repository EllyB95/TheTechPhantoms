<?php include 'config.php';?>
<?php

$string=exec('getmac');
$mac=substr($string, 0, 17); 

if ($_POST['action'] == 'add_to_cart') {
	//echo "<script type='text/javascript'>alert('Course Added In Cart');</script>";
  pg_query(sprintf("insert into public.cart(course_id,emailaddress) values(" . $_POST['course_id'] . ",'" . $mac . "');"));

}

if ($_POST['action'] == 'remove_from_cart') {
  pg_query(sprintf("DELETE FROM public.cart where emailaddress='" . $mac . "' AND course_id='".$_POST['course_id']."';"));
}

?>
