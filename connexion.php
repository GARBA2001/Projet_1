

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>connection</title>
</head>
<body>
    <P>formulaire précedente : </P>

<?php
    echo 'Prénom : ' .$_POST["prenom"].'<br>';
    echo 'Nom : ' .$_POST["nom"].'<br>';
    echo 'Date_de_naissance : '.$_POST["date_de_naissance"].'<br>';
?>
</body>
</html>