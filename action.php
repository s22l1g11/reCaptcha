<!DOCTYPE html>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <title>reCaptcha | dev.zimmerpforte.de</title>
  </head>
  <body>
  <?php
    print_r($_POST);
    echo '<br />verify</br>';
    echo file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=[secret_key]&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
  ?>
  </body>
</html>
