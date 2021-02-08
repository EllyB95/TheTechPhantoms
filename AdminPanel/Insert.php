<?php
include_once '../php/config.php';
if(isset($_POST['save']))
{	 
	 $cmhauserid = $_POST['cmhauserid'];
	 $firstname = $_POST['firstname'];
	 $middlename = $_POST['middlename'];
	 $lastname = $_POST['lastname'];
	 $emailadderess = $_POST['emailadderess'];
	 $phonenumber = $_POST['phonenumber'];
	 $dateofbirth = $_POST['dateofbirth'];
	 $city = $_POST['city'];
	 $province = $_POST['province'];
	 $gender = $_POST['gender'];
	 $ethnicity = $_POST['ethnicity'];
	 $indigenousidentity = $_POST['indigenousidentity'];
	 $culturalconsiderations = $_POST['culturalconsiderations'];
	 $languagespoken = $_POST['languagespoken'];
	 $housingstatus = $_POST['housingstatus'];
	 $livingarrangement = $_POST['livingarrangement'];
	 $sourceofincome = $_POST['sourceofincome'];
	 $occupation = $_POST['occupation'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $query = "INSERT INTO cmhauser(cmhauserid,firstname, middlename,lastname,emailaddress,phonenumber,dateofbirth,city,province,gender,ethnicity,indigenousidentity,culturalconsiderations,languagespoken,housingstatus,livingarrangement,sourceofincome,occupation,username,password) 
	 values ('$cmhauserid','$firstname','$middlename','$lastname','$emailaddress','$phonenumber','$dateofbirth','$city','$province','$gender','$ethnicity','$indigenousidentity','$culturalconsiderations','$languagespoken','$housingstatus','$livingarrangement','$sourceofincome','$occupation','$username','$password')";
	 if($result = pg_query($query)){
		echo "Data Added Successfully.";
	 }
	 else{
		echo "Error.";
	 }
}
?>