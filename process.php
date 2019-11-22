<?php

$to = "mbomba@villanova.edu";

$firstname = $_POST[firstname];
$lastname = $_POST[lastname];
$country = $_POST[country];
$subject = $_POST[Subject];

$headers .= "Content-type: text/html;\r\n";

mail($to, $firstname, $subject);
echo "Email has been sent! Thank you $firstname";
?>
