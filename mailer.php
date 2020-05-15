<?php
if(isset($_POST['content'], $_POST['contact'])) {
    $to = "jakubmizinski@gmail.com";
    $from = "biuro@oskmax.pl";
    $content = $_POST['content'];
    $contact = $_POST['contact'];
    $subject = "Mail z oskmax.pl";
    $message = "Wiadomość:\n $content \n\n Kontakt:\n $contact";

    $headers = "From:" . $from;

    if(mail($to,$subject,$message,$headers)){
        $feedback = 'Wiadomość wysłana! Niedługo się odezwiemy :)';
    }else{
        $feedback = 'Niestety nie udało się wysłać wiadomości :( Może zadzwoń?';
    }
}else{
    $feedback = 'Brakuje wiadomości lub kontaktu :(';
}

echo $feedback;
?>