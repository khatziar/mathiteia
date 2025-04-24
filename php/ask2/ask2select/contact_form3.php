<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
if (isset($_POST['basket'])) {
    $basket = $_POST['basket'];
} else {
    $basket = 0;
}
if (isset($_POST['football'])) {
    $football = $_POST['football'];
} else {
    $football = 0;
}
if (isset($_POST['volley'])) {
    $volley = $_POST['volley'];
} else {
    $volley = 0;
}

$omada = $_POST['omada']; 

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
    echo "Κύριε/α " . $lastname . " " . $firstname . " λάβαμε το μήνυμά σας";
    echo " με θέμα " . $subject . " και θα σας απαντήσουμε το συντομότερο δυνατό!";
    echo "<br/>Η ηλικία σας είναι " . $age . " και το φύλο σας είναι " . $gender . ".";
    echo "<br/>Επιλέξατε τα αθλήματα: ";
    if ($basket == 1) {
        echo "Καλαθοσφαίριση ";
    }
    if ($football == 1) {
        echo "Ποδόσφαιρο ";
    }
    if ($volley == 1) {
        echo "Βόλεϊ ";
    }

    if ($omada != 0) {
            echo "<br/>Επιλέξατε την ομάδα: ";
            switch ($omada) {
                case 1:
                    echo "ΠΑΟΚ";
                    break;
                case 2:
                    echo "ΑΡΗΣ";
                    break;
                case 3:
                    echo "ΗΡΑΚΛΗΣ";
                    break;
            }
        }
    echo "<br/>Το μήνυμά σας είναι: " . $message;
} else {
    echo "Η φόρμα δεν έχει συμπληρωθεί σωστά.<br/>";
    echo $output;
}
?>
</body>
</html>
