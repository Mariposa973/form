<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<style>
.form-custom{
    display: flex;
    flex-flow: column wrap;
    justify-content: center;
}
.form-input {
      display: flex;
      width: 50%;
      margin-bottom: 10px;
      padding: 2px;
      border: 1px solid rgb(182, 176, 176);
}  
  
label {
    margin: 5px 10px 5px;
    flex: 1;
}
  
.textarea-custom-input {
    display: flex;
    padding : 2px;
    margin-bottom: 10px;
    border: 1px solid rgb(182, 176, 176);
    width   : 50%;
    resize  : none;
    overflow: auto;
}

button {
    display: block;
    margin-bottom: 10px;
    background-color: rgb(47, 47, 53);
    color: whitesmoke;
    font-family:Arial, Helvetica, sans-serif;
    font-size: 1rem;
    padding: 8px 25px;
    cursor: pointer;
}
</style>


<body>

<form  class="form-custom" action="thanks.php"  method="post">
    <div>
        <label  for="user_name">Nom :</label>
        <input  class="form-input" type="text"  id="user_name"  name="user_name">
    </div>

    <div>
        <label  for="user_firstname">Prénom :</label>
        <input  class="form-input" type="text"  id="user_firstname"  name="user_firstname">
    </div>

    <div>
        <label  for="user_email">Courriel :</label>
        <input  class="form-input" type="email"  id="user_email"  name="user_email">
    </div>

    <div>
        <label for="user_phone">Enter your phone number:</label>
        <input class="form-input" type="tel" id="user_phone" name="user_phone"> <!--pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"-->
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
      <label  for="user_message">Message :</label>
      <textarea class="textarea-custom-input" id="user_message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  </body>


</html>

