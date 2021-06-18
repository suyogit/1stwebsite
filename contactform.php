<?php

if(isset($_POST['submit'])){
$Search = $_POST['Search'];
$firstname = $_POST['firstname'];
$Lastname = $_POST['Lastname'];
$EmailFrom = $_POST['Email'];
$password = $_POST['password'];
$About = $_POST['About'];

$mailTo = "asuyog042@gmail.com";
$headers = "From:  ".$EmailFrom;
$txt = "You have received an email from ".$firstname.".\n\n".$About;

mail($mailTo, $firstname, $txt, $password, $headers);
header("Location: intro.html ? mailsent");
}
?>
 
 <?php
 if (isset($_POST['firstname']) && isset($_POST['Lastname']) && isset($_POST['Email']) && if ($_POST['password']) && isset($_POST['About']) && isset($_POST['Search'])) {
 	echo "OK";
 }
 else {
 	"NOT OK";
 }
 ?>