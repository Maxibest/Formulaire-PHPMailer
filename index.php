<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="contact1">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <div id="moove" class="moove">
          <img src="images/img-01.png" alt="IMG">
        </div>
      </div>

      <form class="contact1-form validate-form" action="send.php" method="post">
        <span class="contact1-form-title">
          Demande Pack office 365
        </span>

        <div class="wrap-input1 validate-input" data-validate="nom obligatoire">
          <label for="name">*</label>
          <input class="input1" type="text" name="nom" value="<?php $nom ?>" placeholder="Nom" require>
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Prénom obligatoire">
          <label for="name">*</label>
          <input class="input1" type="text" name="prenom" value="<?php $prenom ?>" placeholder="Prénom" require>
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="E-mail obligatoire ex: ex@abc.xyz">
          <label for="email">*</label>
          <input class="input1" id="email" type="text" name="email" value="<?php $mail ?>" placeholder="Email" require>
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="numéro de l'étudiant est obligatoire">
          <label for="studentNumber">*</label>
          <input class="input1" type="text" id="studentNumber" value="<?php $studentNumber ?>" name="studentNumber"
            placeholder="Numéro étudiant" pattern="[A-Za-z0-9]+" require>
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1">
          <textarea class="input1" name="message" placeholder="Message (facultatif)"></textarea>
          <span class="shadow-input1"></span>
        </div>

        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn" name="send">
            <span>
              Envoyer
              <i class='bx bx-paper-plane'></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script src="./js/script.js"></script>
  <script>
  $('.js-tilt').tilt({
    scale: 1.1
  })
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  </script>

  <script src="js/main.js"></script>

</body>

</html>