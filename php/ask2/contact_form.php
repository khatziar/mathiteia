<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$output = "";
// Εξετάζουμε αν έχουν συμπληρωθεί όλα τα πεδία!
if ($firstname=='') {
$output = "- Συμπληρώστε το Όνομά σας!<br/>";
}
if ($lastname=='') {
$output = $output . "- Συμπληρώστε το Επώνυμό σας!<br/>";
}
if ($age=='') {
$output = $output . "- Συμπληρώστε την ηλικία σας!<br/>";
}
if ($gender=='') {
$output = $output . "- Επιλέξτε το φύλο σας!<br/>";
}
if ($email=='') {
$output = $output . "- Συμπληρώστε το Email σας!<br/>";
}
if ($subject=='') {
$output = $output . "- Συμπληρώστε το Θέμα!<br/>";
}
if ($message=='') {
$output = $output . "- Συμπληρώστε το Μήνυμά σας!<br/>";
}
// Εξετάζουμε αν το email είναι σωστό!
if ( !strpos($email, '@')>=1 ) {
$output = $output . "- Το email είναι λανθασμένο!<br/>";
}
if ( strlen($email)<6 ) {
$output = $output . "- Το email είναι ελλιπές!<br/>";
}
?>
<html>
<head>
<title>ΑΠΑΝΤΗΣΗ ΦΟΡΜΑΣ HTML</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
if ($output=="") {
    echo "Κύριε/α " . $lastname . " " . $firstname . "λάβαμε το μήνυμά σας";
    echo " με θέμα " . $subject . " και θα σας απαντήσουμε το συντομότερο δυνατό!";
} else {
    echo "Η φόρμα δεν έχει συμπληρωθεί σωστά.<br/>";
    echo $output;
}
?>
</body>
</html>
