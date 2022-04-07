<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "<h2>Information: ";
echo "Name: " . $nombre . <br/>;
echo "Email: " . $email . <br/>;
echo "Subject: " . $subject . <br/>;
?>



<!-- <?php

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subect = $_POST['subject'];
//     $message = $_POST['message'];

//     $mailTo = "alfonso_alvarez@alfalmi.com";
//     $headers = "From: ".$mailFrom;
//     $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

//     mail($mailTo, $subject, $txt, $headers);
//     header("Location: index.php?mailsend")
// }

?> -->