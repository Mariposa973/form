<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de remerciements</title>
</head>
<body>

<?php echo 

'Merci '. $_POST['user_name'] . ' ' . $_POST['user_firstname'] . ' de nous avoir contacté à propos de "' . $_POST['topic_request'] . '". <br>',

'Un de nos conseiller vous contactera soit à l\'adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone'] . 'dans les plus brefs délais pour traiter votre demande : <br>';

$_POST['user_message'];

?>


</body>
</html>