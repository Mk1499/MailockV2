<?php 
//include ("connect.php") ; 	

$username = "" ;
$auth = 0 ; 
$rslt = "";
if (isset ($_POST['login']) ) {


$pass = openssl_encrypt ($_POST['password'], "AES-128-ECB", "maillock", 0 ,"");
$username = $_POST['username'];

$_SESSION['$username'] = $username;
$sql = "SELECT Email  FROM members WHERE UserName = '$username' and  password =  '$pass' " ;
$rslt = $conn->query($sql) ;

//$mem= $rslt->fetchColumn();


if (mysqli_num_rows($rslt) <= 0 ) {
	
	echo "<script> alert('Your Email or Password is Wrong  Please Try Agian')</script>" ; 
}
	else {
		
		echo "<script> alert('You Have Logged in we will redirct you in 5 sec '); </script>"	;
         $auth = 1 ; 
		header ("Location:inbox.php") ;
	
	}
}
$email = mysqli_fetch_array($rslt); 

$_SESSION['email'] = $email[0] ;
$_SESSION['auth'] = $auth ; 
$_SESSION['username'] = $username ; 

?>