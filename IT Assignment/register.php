<?php 
$servername="localhost";
$password ="";

try {
	$conn = new PDO("mysql:host=$servername;dbname=table1","root",$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO student(fname, lname, id, imsi, email, postal, residential) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[id]', '$_POST[imsi]', '$_POST[email]', '$_POST[postal]', '$_POST[residential]')";
	$conn->exec($sql);
	echo "Close this tab to save your information immediately";
} catch (PDOException $e) {
	echo $sql."<br>".$e->getMessage();
}
$conn=null;
 ?>