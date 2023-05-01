

 <?php
$serveur ="localhost";
$dbname ="liste_d'apprenant";
$user ="root";


try{
$dbco = new PDO ("mysql:host=$serveur;dbname=$dbname",$user,);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$form = "CREATE TABLE form(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    prenom TEXT,
    nom TEXT,
    date_de_naissance)";
    $dbco->exec($form);
}
catch(PDOException $e){
    echo 'Erreur : '.$e->getMessage();
}
?> 