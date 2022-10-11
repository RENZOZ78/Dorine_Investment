<?php

    // method1
    $to = "didierbap@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
     $headers = "From: $from";
    $subject = "Vous avez un nouveau message de votre site";

    $fields = array();
     $fields["name"]    = "Name";
     $fields["email"]    = "Email";
    //  $fields["sub"]    = "Subject";
   $fields["message"]   = "Message";


     $body = "Vous avez recu ce message:\n\n"; foreach($fields as $a => $b){   
        $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); 
        }
        
     if ($send = mail($to, $subject, $body, $headers)){
        echo '<p> Merci $name,  Votre message a bien été envoyé.<p>';
        echo '<script type="text/javascript">alert("Votre message a bien ete envoyé")</script>';
        //   header("location: index.html");
    //     exit();
        // <meta http-equiv="refresh" content="2; url=index.html">
      }
     else{
        echo 'Impossible d\'envoyer des emails. Veuillez réessayer.';
        // header("location: index.html");
     }
     
        
      header("location: ..\index.html");

     
                    
     
   

    //  method2
//      if (isset($_POST['message'])) {
//      $retour = mail('didierbap@gmail.com', 'envoie depuis la page Contact', $_POST['message'], 'From: info@dofininvest.com' . 'Reply-to: ' . $_POST['email']);
//      if($retour)
//          echo '<p>votre message a bien ete envoyé.</p>';
//    }
    // $retour = mail('didierbap@gmail.com', 'envoie depuis la page contact', $_POST['message'], '');
    // if ($retour)
    //     echo '<p> Votre message a bien été envoyé.<p>';

?>
