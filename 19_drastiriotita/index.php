<html> <head>
<meta charset="utf-8" /> <title>PHP - Δραστηριότητα 19</title>
</head>
<body>
<?php
$db_host = "localhost"; 
$db_name = "company";
$db_username = "root";
$db_password = "";
// Σύνδεση με Βάση Δεδομένων company απο αρχείο db.sql
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
// Έλεγχος Σύνδεσης
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Εκτέλεση Ερωτήματος SQL
$sql = "SELECT * FROM customers where email like 'papkostas%' ";
$result = $conn->query($sql);
// Εμφάνιση Αποτελεσμάτων
while($row = $result->fetch_assoc()) {
echo "<br> Firstname: ". $row["firstname"]. " - Lastname: ". $row["lastname"]. "<br>";
}
$conn->close();
?>
</body>
</html>