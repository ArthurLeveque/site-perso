<?php require('req/form-treatment.php'); ?>

<section class="bloc" id="contact">
    <div class="bloc-title">
        <h2>Contact</h2>
    </div>

    <form action="#contact" method="post">
        
        <div class="flex-input">
            <label for="name"><i class="fas fa-user"></i></label>
            <input type="text" id="name" name="name" placeholder="Nom / Prénom" required value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>">
        </div>
        
        <div class="flex-input">
            <label for="mail"><i class="fas fa-envelope"></i></label>
            <input type="email" id="mail" name="email" placeholder="Adresse E-mail" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
        </div>
        
        <textarea id="msg" name="message" placeholder="Votre message..." required><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>

        <button type="submit" name="send">Envoyer le message</button>
    </form>

    <?php if(isset($msg)) {
         echo $msg;
      }
    ?>
</section>