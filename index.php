
<?php
session_start();

	include("templates/header.php");

	$view = valider("view"); 

	if (!$view) $view = "accueil"; 
	switch($view)
	{		

		case "accueil" : 
			include("templates/accueil.php");
		break;
		
		case "connexion" :
			include("templates/connexion.php");
		break; 

		case "users" : 
			include("templates/users.php");
		break;
        case "inscrption" : 
			include("templates/inscription.php");
		break;
        case "recherche" : 
			include("templates/recherche.php");
		break;
        case "modifcompte" : 
			include("templates/modifcompte.php");
		break;
		case "chat" : 
			include("templates/chat.php");
		break;
		
		default : 
			if (file_exists("templates/$view.php"))
				include("templates/$view.php");

	}



	include("templates/footer.php");


	
?>
