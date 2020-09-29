<?php 
if(isset($_POST['submit'])){
    $to = "lebron@james.com";
    $from = $_POST['mail']; 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = "Comments";
    $subject2 = "Copy of your commets";
    $comment = $firstname . " " . $lastname . " wrote the following:" . "\n\n" . $_POST['comment'];
    $comment2 = "Here is a copy of your message " . $firstname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$comment,$headers);
    mail($from,$subject2,$comment2,$headers2); 
    echo "Mail Sent. Thank you " . $firstname . ", we will contact you shortly.";
    }
?>