<!-- <?php



// email info
// $name = "ssd";//$_POST['name'];
// $email = "sad@gamil.com"//;$_POST['email'];
// $email_subject = "nias"//$_POST['subject'];
// $email_body = "Goooo" //$_POST['message'];

// create the email header
// $email_to = "alfonso_alvarez@alfalmi.com";
// $headers = "From: ";
// $headers = "From: ".$email;
// $headers .= $visitor_email;

// //send email to user
// if( mailmail($email_to, $email_subject, $email_body, $headers));{
//     echo 'success';
// }
// else{
//     echo 'not send';
// }
//     // 
    // 
    
    // 
    // header('Location: ../');
// echo "<h2>Information: ";
// echo "Name: " . $nombre . <br/>;
// echo "Email: " . $email . <br/>;
// echo "Subject: " . $subject . <br/>;
?> -->



<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subejct = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "alfonso_alvarez@alfalmi.com";
    $header = "From: noreply@example.com" . "\r\n";
    $header.= "Reply-To: noreply@example.com" . "\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    // $txt = "You have recieved an e-mail from ".$name.".\r\n".$message;

    $mail = @mail($email, $subject, $message, $header);
    if ($mail) {
        echo "<h4>Mail enviado</h4>";
    }
    // header("Location: index.php?mailsend")
}

?>