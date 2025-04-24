<?php
// Δήλωση μεταβλητών στην PHP
$lastname = "Παπαδόπουλος"; 
$firstname = "Κώστας"; 
$age = 24;
?>
<html> 
    <head> 
        <title>Άσκηση PHP - Μεταβλητές</title> 
        <meta charset=”utf-8” /> 
    </head> 
    <body>
        <p> Το όνομα μου είναι
    <?php
    /*
    Σχόλια στην PHP!
    */
    // Σχόλιο μιας γραμμής στην PHP!
    echo $lastname." " . $firstname;
    echo " και είμαι " . $age . " ετών!"; 
    ?>
    </body>
</html>