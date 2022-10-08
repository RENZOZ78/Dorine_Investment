<?php

    $to = "didierbap@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "Vous avez un nouveau message de votre site";

    $fields = array();
    $fields["name"]    = "Name";
    $fields["email"]    = "Email";
    $fields["sub"]    = "Subject";
    $fields["message"]   = "Message";
    

    $body = "Vous avez recu ce message:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
