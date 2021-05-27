<?php

?>
<div id="inscription" class="formulaire">
<h1>Inscription</h1>
<form action="./control.php" method="GET" >
    <?php
    if(isset($_GET["err"])) echo "<div style='color:red'>Les informations entrées sont incorrectes</div>"
    ?>
    <div>
        <label class="label" >Prénom</label></br>
        <input class="champs"type="text" id="firstname" name="prenom"/>
    </div>
    <div>
        <label class="label" >Nom</label></br>
        <input class="champs"type="text" id="name" name="nom"/>
    </div>

    <div>
        <label class="label" >Adresse Email</label></br>
        <input class="champs"type="text" id="email" name="email"/>
    </div>
    <div>
        <label class="label"> Je suis :</label>
        <select name="status">
            <option value="eleve">Elève</option>
            <option value="prof">Enseignant</option>
        </select></br></br>

    </div>
    <div>
        <label class="label" >Mot de passe</label></br>
        <input class="champs"type="password" id="mdp" name="password"/>
    </div>
    <div>
        <label class="label" >Confirmation de mot de passe</label></br>
        <input class="champs"type="password" id="confirmationmdp" name="passconf"/>
    </div>

    <input type="submit" name="action" value="Inscription" />
</form>
</div>