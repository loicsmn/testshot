<?php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

// On envoie l'entête Content-type correcte avec le bon charset
header('Content-Type: text/html;charset=utf-8');

// Pose qq soucis avec certains serveurs...
echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- **** H E A D **** -->
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<title>UberProf</title>

</head>
<!-- **** F I N **** H E A D **** -->


<!-- **** B O D Y **** -->
<body>

<div id="banniere">
<h1 id="btitre" onclick="document.location.href='index.php'"> UBERPROF</h1></br>
<a href="index.php?view=accueil">Accueil</a>

<?php
    if(isset($_SESSION["id"]) && $_SESSION["élève"] == 0) {
        
        
        echo "<a href = \"index.php?view=modifcompte\" > Mes compétences </a >";
        echo "<a href=\"index.php?view=chat\">Discussions</a>";
        echo "<a href = \"control.php?action=Logout\"> Se déconnecter </a>";

    }

    elseif(isset($_SESSION["id"]) && $_SESSION["élève"] == 1) {
        echo "<a href=\"index.php?view=recherche\">Rechercher un professeur</a>";
        echo "<a href=\"index.php?view=chat\">Discussions</a>";
        echo "<a href = \"control.php?action=Logout\"> Se déconnecter </a>";
    }


    else{
        echo "<a href = \"index.php?view=connexion\" > Connexion</a >";
        echo "<a href = \"index.php?view=inscription\" > Inscription</a >";

    }

?>
</div>

</body>
