<?php
 
require 'connection.php';
$conn    = Connect();
$uname   = $conn->real_escape_string($_POST['uname']);
$psw  = $conn->real_escape_string($_POST['psw']);
$query   = "INSERT into users (uname,psw,) VALUES('" . $uname . "','" . $psw . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Opss ,nu s-a facut conexiunea la baza de date: ".$conn->error);
 
}
 
echo "Conexiunea este reusita  <br>";
 
$conn->close();
header('Location: practica.html'); 
 
?>