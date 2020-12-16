<?
$firstname = $POST['firstname'];
$lastname = $POST['lastname'];
$phoneCode = $POST['phoneCode'];
$phone = $POST['mobilenumber'];
$email = $POST['email'];

if (!empty($firstname) || !empty($lastname) || !empty($mobilenumber) || !empty($email) || !empty($password) || !empty($gender)) {
	$host ="localhost";
	$dbFirstname = "root";
	$dbLastname = "root";
	$dbPassword = "";
	$dbname = "youtube";


	//create connection
	$conn = new mysqli($host, $dbfirstname, $dblastname, $dbPassword, $dbname);

	if (mysqli_connect_error()) {
		die('Connect Error'('.mysqli_connect_errno().')'.mysqli_connect_error());
	} else {
         $SELECT
	}
} else {
	echo "All field are required";
	die ();
}
?>