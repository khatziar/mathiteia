<html> <head>
<meta charset="utf-8" /> <title>PHP - Δραστηριότητα 33</title>
</head>
<body>
<?php
$db_host = "localhost"; 
$db_name = "examsDB";
$db_username = "userdb";
$db_password = "passwd";
// Σύνδεση με Βάση Δεδομένων company απο αρχείο db.sql
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
// Έλεγχος Σύνδεσης
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Διαβασμα τιμων απο τη φόρμα inputform.html
$name = $_POST['name'];   
$lastname = $_POST['lastname'];


$sql = "INSERT INTO students(name, lastname) values (?, ?)"; // Εισαγωγή Δεδομένων
$stmt = $conn->prepare($sql); // Προετοιμασία Ερωτήματος
$stmt->bind_param("ss", $name, $lastname); // Δέσμευση Παραμέτρων
$stmt->execute(); // Εκτέλεση Ερωτήματος
// Έλεγχος Εισαγωγής Δεδομένων  
if ($stmt->affected_rows > 0) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Κλείσιμο Σύνδεσης
?>
</body>
</html>