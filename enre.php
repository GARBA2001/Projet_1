

<?php
$serveur ="localhost";
$dbname ="liste_d'apprenant";
$user ="root";

$prenom = $_POST["prénom"];
$nom = $_POST["nom"];
$date_de_naissance = $_POST["date_de_naissance"];


try{
$dbco = new PDO ("mysql:host=$serveur;dbname=$dbname",$user);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sth = $dbco->prepare("
INSERT INTO apprenant(prénom, nom, date_de_naissance)
VALUES (:prénom, :nom, :date_de_naissance)");
$sth->bindParam(':prénom',$prenom);
$sth->bindParam(':nom',$nom);
$sth->bindParam(':date_de_naissance',$date_de_naissance);
$sth->execute();
}
catch(PDOException $e){
    echo ' Impossible. Erreur : '.$e->getMessage();
}
?>