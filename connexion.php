<?php


?>

<div id="connexion" class="formulaire">

<h1>Connexion</h1>

<form action="./control.php" method="GET">
Adresse Email: <input type="text" name="identifiant" /><br />
Mot de passe: <input type="password" name="mdp" /><br />
<input type="submit" name="action" value="Connexion" />
</form>

<?php
if(isset($_GET["err"])) echo "<div style=\"color:'red'\" id=\"error\"> Email/Mot de passe incorrect(s) </div>"
?>



</div>
