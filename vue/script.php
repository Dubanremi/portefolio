<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/script.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>

  <?php $nompc="user@user-vostro-42-1337:"; ?>
  <?php $nom="<p><span style=\"color:#6dd834;Font-Weight: Bold;  font-size:14px;\">user@user-vostro-42-1337:</span><span style=\"color:#729fcf;Font-Weight: Bold;\">~</span><span style=\"Font-Weight: Bold;\">$</span> "; ?>
</head>

<body >

  <div id=menu>
    <p><i class="fa fa-times-circle" id="croix" aria-hidden="true"></i>
      <i class="fa fa-minus-circle" id="redu" aria-hidden="true"></i>
      <i class="fa fa-window-maximize" id="agra" aria-hidden="true">
      </i><span id="menud"> <?php echo $nompc; ?>~</span>
    </p>
  </div>

  <div id="base>">
    <?php echo $nom; ?>
    <span>php listescript.php</span></p>
    <?php echo $nom; ?>
    <span> script disponible :</span></p>
    <p id="fb">1-ForceBrute</p>
    <p id="pip">2-Plage d'ip</p>
    <p>3-TODO</p>
    <p>Cliquez sur un script pour le lancer </p>
  </div>

  <div id="forcebrute">
    <?php echo $nom; ?>
    <span> php forcebrute.php</span></p>
    <p>Mot de passe a cracker : rd </p>



  </div>

  <div id="plage_ip">
    <?php echo $nom; ?>
    <span> php plageip.php</span></p>
    <p>Plage d'ip dans laquelle chercher : 10.216.0.110 a 10.216.0.119</p>

    <a href= "http://portefolio.cono">Retour au menu </a>
    </div>
  <div id="fbhide">
    <h3>Forcebrute</h3>
    <p>Forcebrute est un script développer au tout début de la formation, une idée de Mr Gibaru Daniel, complété a deux .</p>
    <p>Ce script permet de trouver un mot de passe composé uniquement de  lettres, le tout en mode aléatoire, et peu importe le nombre de lettre .</p>
    <a href= "http://portefolio.cono">Retour au menu </a>
  </div>
  <div id="iphide">
    <h3>Plage ip</h3>
    <p>plage ip est un script développer pour tester toute les ip utilisé sur un résau</p>
    <p>Ce script va ping toutes les adresse ip dans une fourchette donnée </p>
    <a href= "http://portefolio.cono">Retour au menu </a>
  </div>
  </body>
