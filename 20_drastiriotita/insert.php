<html> <head>
<meta charset="utf-8" /> <title>PHP - Δραστηριότητα 20</title>
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
//Διαβασμα τιμων απο τη φόρμα inputform.html
$firstname = $_POST['firstname'];   
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];


$sql = "INSERT INTO customers(firstname, lastname, email, age) values (?, ?, ?, ?)"; // Εισαγωγή Δεδομένων
$stmt = $conn->prepare($sql); // Προετοιμασία Ερωτήματος
$stmt->bind_param("sssi", $firstname, $lastname, $email, $age); // Δέσμευση Παραμέτρων
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