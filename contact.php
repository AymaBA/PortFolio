<?php
if(isset($_POST['email'])) {
 
    
    $email_to = "aymaprod12@gmail.com";
    $email_subject = "Contact Aymaprud.com";
 
    function died($error) {
        
        echo "<br /><br />";
        echo " <font class='war' color='red'><b>Nous sommes désolés, mais des erreurs ont été détectées dans le formulaire que vous avez envoyé.</b></font><br/><br/> ";
        echo "Ces erreurs apparaissent ci-dessous :<br /><br />";
        echo $error."<br /><br />";
        echo "Veuillez corriger les erreurs présentes.<br /><br />";
        die();
    }
 
 
    
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Nous sommes désolés, mais le formulaire que vous avez soumis semble poser problème.');       
    }
 
     
 
    $first_name = $_POST['first_name']; 
    $last_name = $_POST['last_name']; 
    $email_from = $_POST['email']; 
    $telephone = $_POST['telephone']; 
    $comments = nl2br($_POST['comments']); 
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .=   '  - L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= ' - Le prénom que vous avez entré ne semble pas être valide.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= '- Le nom de famille que vous avez entré ne semble pas être valide.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= '- Le message que vous avez entrés ne semblent pas être valides.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "  Details du formulaire ci-dessous.\n\n <br/> <br/>";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= 
    
    "<!DOCTYPE html>
    <html lang='fr'>
    <head>
      <meta charset='UTF-8'>
      <meta name='iewport' content='width=device-width, initial-scale=1.0'>
      <meta http-equiv='X-UA-Compatible' content='ie=edge'>
      
    </head>
    <body>
      <a>Prénom : </a>  ".clean_string($first_name)."
      
      <br/>

      <a>Nom : </a> ".clean_string($last_name)."

      <br/>

      <a>Email : </a> ".clean_string($email_from)."

      <br/>

      <a>Numéro de Téléphone : </a> ".clean_string($telephone)."

      <br/>

      <a>Méssage : </a> ".clean_string($comments)."
      
    

    </body>
    </html>";
  
 

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
"Content-type: text/html; charset=UTF-8" . "\r\n";
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

header("refresh:20;url=index.php" );



?>

<p class="nice">Merci de nous avoir contacter. Nous vous recontacterons très bientôt. </p>

 
<?php
 
}
?>