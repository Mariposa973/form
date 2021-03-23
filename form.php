<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="form.css">
</head>

<body>

<form  class="form-custom" action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  class="form-input" type="text"  id="nom"  name="user_name">
    </div>

    <div>
        <label  for="prenom">Prénom :</label>
        <input  class="form-input" type="text"  id="prenom"  name="user_firstname">
    </div>

    <div>
        <label  for="courriel">Courriel :</label>
        <input  class="form-input" type="email"  id="courriel"  name="user_email">
    </div>

    <div>
        <label for="phone">Enter your phone number:</label>
        <input class="form-input" type="tel" id="phone" name="user_phone"> <!--pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"-->
    </div>
    <div>
        <label for="topic_request">Sujet du mail :</label>
        <SELECT class="form-input" name="topic_request" size="1">
        <OPTION>Motif de votre email
        <optgroup label="Tout va bien !">
            <option value="allGood">Rien à signaler
        </optgroup>
        <optgroup label="C'est la cata !">
            <OPTION>Je n'ai pas reçu ma commande
            <OPTION>Mes produits sont livrés abimés
            <OPTION>Ce n'est pas ce que j'ai commandé
        </optgroup>
        <optgroup label="Je m'ennuie">
            <OPTION>Je veux juste vous embêter...
        </optgroup>
        </SELECT>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea class="textarea-custom-input" id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  </body>


</html>

<?php
  var_dump($_POST);

  echo  $_POST['user_name'];

?>
