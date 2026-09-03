<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>acceuil</title>
</head>
<body>
<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
echo "Bonjour $prenom";

$login = $_POST['login'];
$mdp = $_POST['mdp'];

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
if ($login == "admin" && $mdp == "azerty") {
    header("Location: http://$host$uri/profil.html");
} else {
    header("Location: http://$host$uri/index.html");
}
?>
</body>
</html>