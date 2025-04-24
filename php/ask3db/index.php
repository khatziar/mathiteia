<html> <head>
<meta charset="utf-8" /> <title>PHP Παράδειγμα Σύνδεσης με ΒΔ</title>
</head>
<body>
<?php
$db_host = "localhost"; // mathiteia.tpallas.net
$db_name = "etaireia";
$db_username = "root";
$db_password = "";
// Σύνδεση με Βάση Δεδομένων etaireia από Δραστηριοτητα 30
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
// Έλεγχος Σύνδεσης
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Εκτέλεση Ερωτήματος SQL
$sql = "SELECT * FROM ypalliloi";
$result = $conn->query($sql);
// Εμφάνιση Αποτελεσμάτων
while($row = $result->fetch_assoc()) {
echo "<br> id: ". $row["id"]. " - Eponymo: ". $row["eponymo"]. " - Hlikia: ". $row["ilikia"] . " - Misthos: ". $row["misthos"] . " - Thesi: ". $row["thesi"] . "<br>";
}
$conn->close();
?>
</body>
</html>