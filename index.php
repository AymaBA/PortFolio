
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://kit.fontawesome.com/ce7f6bbc79.js" crossorigin="anonymous"></script>
    <title>Tony</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151189829-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151189829-1');
</script>

</head>
<body>
    
<div class="header">
    <a href="index.php"><h1>Tony Fernandez</h1></a>

    <div class="nav">
            
      <!-- <a class="link contact-link" for=".scroll" onclick="scroll()" href="#">Contact </a> -->
      <!-- <a class="link" href="index.php">Acceuil</a> -->
        <button class="scroll" >Contact</button>
        <button class="scroll Top" > à propos </button>
        
    </div>
         
    
    <i class="fas fa-bars" ></i>
</div>
<div class="overlay1"></div>
    <div class="main1">
        
            <div class="content1">
                    <br><br><br>
                    <h1 class="child"></h1><br>
                    <img class="img1" src="img/PP.jpg " alt="">
                    
                
                            <p class="t1">Ponctuelle</p><br>
                            <p class="t2">Perseverant</p><br>
                            <p class="t3">Travailleur</p><BR>
                    
                </div>
   
                <p class="txt">Ma formation et mes expériences professionnelles m'ont permis... détaillez ici les expériences ou les compétences qui vous concernent, que vous avez déjà présentées rapidement dans votre CV... Mais ne détaillez ici que une ou deux expériences ou compétences en relation directe avec le poste qui intéresseront le recruteur.</p><br>
                
                <p class="txt">Je reste à votre disposition pour de plus amples informations et j'espère pouvoir vous présenter ma motivation de vive voix lors un entretien.</p>
    </div>
    <div class="main2">
        <img class="img2" src="img/dentiste.jpg" alt="">
        <img class="img2" src="img/dentiste2.jpg" alt="">
        <img class="img2" src="img/etude.png" alt="">
       
    </div>
    <h2 class="contactMoi :" >Contact Moi :</h2>
    <div class="contact">
    
    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22170.924390434164!2d2.552200461565786!3d44.35982764784427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b27d9845b9e425%3A0xaf5750dcd0f72c39!2sRodez!5e0!3m2!1sfr!2sfr!4v1572081138885!5m2!1sfr!2sfr"  frameborder="0" style="border:0;" allowfullscreen=""></iframe> </div>
       
    <div  class="contact-section target">
        <form action="" method="post">
            <span class="prenom">Prénon : </span><br>
            <input type="text" name="first_name" id="first_name" required><br>
            <span class="prenom">Nom : </span><br>
            <input type="text" name="last_name" id="last_name"required><br>
            <span class="prenom">Email :</span><br>
            <input type="email" name="email" id="email" required ><br>
            <span class="prenom">Numèro de téléphone :</span><br>
            <input type="text" name="telephone" id="telephone" required ><br>
            <span class="prenom">Message :</span><br>
            <textarea name="comments" id=""  rows="10" required></textarea><br>
            <input type="submit" class='validate' value=" Envoyer">
            <br>
        </form>
    </div>
    </div>
    <h2 class="contactMoi :" ></h2>

<script src="app.js"></script>
</body>
</html>

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
@mail($email_to,$email_subject,$email_message,$headers);  

header("Refresh:5;url=index.php");



?>

<p class="nice">Merci de nous avoir contacter. Nous vous recontacterons très bientôt. </p>

 
<?php
 
}
?>

<footer>
 <p class="p-footer">Copyright &copy;<script>var date = new Date () ;document.write(date.getFullYear())</script>|| All Right Reserved Tony Fernandez</p>
</footer> 




