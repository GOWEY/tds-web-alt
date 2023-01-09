<div id="box_contact" class="box">
    <h1>Contact</h1>
<?php
if (isset($_GET['succes'])) { ?>
    <div id="succes">Votre message a bien été envoyé !</div>
<?php }elseif (isset($_GET['failCaptcha'])) {?>
        <div id="succes">Erreur dans le Captcha</div>
<?php }elseif (isset($_GET['failSubmit'])) {?>
        <div id="succes">Veillez à remplir tout les champs</div>
<?php }else{ ?>
    <form action="vue/utils/mail.php?menu=<?php echo $_GET["menu"] ?>" method="post" id="formulaire_contact">
        <label for="name">Nom</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Adresse e-mail</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="subject">Sujet</label><br>
        <input id="subject" name="subject"><br>
        <label for="message">Message</label><br>
        <textarea id="message" name="message"></textarea><br>
        <div class="g-recaptcha" data-sitekey="6LcZRZ4jAAAAACxFp_SoRGxpa7dWNhvFhYE7b6n-"></div><br>
        <input type="hidden" name="captcha" id="captcha">
        <input type="submit" value="Envoyer" id="btn_submit">
    </form>
<?php } ?>
</div>
<script>
    if (captchaIsValid) {
        // Met à jour la valeur du champ caché
        document.getElementById('captcha').value = 'valid';
    }
</script>