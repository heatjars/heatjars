<?php
/*establish teh data base*/
$servername = "localhost";
$username = "dizzle";
$password = "BL&ckkM*Nd!s=0N*nT#RR";
$db = "Msg";

$conn = mysqli_connect($servername, $username, $password, $db);
/*Get all messages*/
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	  $messages = $row;
  }
}
/*return all messages*/
header("Content-Type: application/json");
echo json_encode($messages);
/*close conection*/
$conn->close();
?>
