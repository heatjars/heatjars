<?php
/*establish teh data base*/
$servername = "localhost";
$username = "dizzle";
$password = "BL&ckkM*Nd!s=0N*nT#RR";
$db = "Msg";

$conn = mysqli_connect($servername, $username, $password, $db);
/*turn the POST request into variables*/
$User = stripslashes($_POST["user"]);
$Msg = stripslashes($_POST["msg"]);
$Time = time();
/*insert into the SQL database*/
$sql = "INSERT INTO main (User, Msg, Time) VALUES ('$User', '$Msg', '$Time')";

if($conn->query($sql) === TRUE) { echo"YAY!"; } else { echo"fail"; }
/*close conection*/
$conn->close();
?>
