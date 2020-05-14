<?php 
if(isset($_POST['submit'])){
    $to = "jakubmizinski@gmail.com";
    $from = "biuro@oskmax.pl";
    $content = $_POST['content'];
    $contact = $_POST['contact'];
    $subject = "Mail z oskmax.pl";
    $message = "Wiadomość: $content \n\n Kontakt: $contact";

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you, we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>