<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
    <title>Ex-form-php</title>
</head>

<body>

    <?php
    // var_dump($_POST); 
    // var_dump($_POST['user_lastname']);
    ?>

    <h1>À propos de votre demande...</h1>
    <h2>Félicitations, le formulaire est bien rempli !</h2>
    <p>
        Merci <span><?= $_POST['user_firstname'] ?></span> <span><?= $_POST['user_lastname'] ?></span> de nous avoir contacté
        à propos de <span><?= $_POST['user_music'] ?></span>, votre style de musique préféré.</br>
        Un de nos conseillers musique vous contactera soit à l'adresse <span><?= $_POST['user_mail'] ?></span> soit par téléphone
        au <span><?= $_POST['user_tel'] ?></span> dans les plus brefs délais pour traiter votre demande :</br>
        <span>"<?= $_POST['user_message'] ?>"</span>
    </p>

</body>

</html>