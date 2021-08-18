<?php
if(isset($_POST['send'])) {
   if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
    $mymail = "noreply@arthur-leveque.go.yj.fr";

    $header="MIME-Version: 1.0\r\n";
    $header.='From:"' . $_POST['name'] . '"' . "\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    $message='
    <html>
        <body>
        <div>
            <u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
            <u>Mail :</u>'.$_POST['email'].'<br />
            <br />
            '.nl2br($_POST['message']).'
            <br />
        </div>
        </body>
    </html>
    ';
    mail($mymail, $_POST['name'], $message, $header);
    $msg="<p>Votre message a bien été envoyé !</p>";
   } else {
      $msg="<p>Tous les champs doivent être complétés !</p>";
   }
}
?>