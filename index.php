<!DOCTYPE html>
<html>
  <head>
    <title>reCaptcha | dev.zimmerpforte.de</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <p>This is a test form.</p>
    <form action="action.php" method="POST">
      <label>Please insert a name:</label>
      <input type="text" name="name" required="required" autofocus="autofocus" />
      <div class="g-recaptcha" data-sitekey="6Lff-_8SAAAAAJ_e3HYvfMBaHBw-mkci_hT-KmsV"></div>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
