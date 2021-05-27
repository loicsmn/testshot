<?php
include_once("./libs/security.php");
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

if(isset($_SESSION["id"])) {
    echo "<div id='welcomemsg' style='position:fixed; bottom:10px; right:10px'> Bienvenue " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . " </div>";
}
?>


</body>
</html>
