<!Doctype html>
<html>
    <head>
        <title>Mon Site</title>
        <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css" />
    </head>
    <body>    
        <header>
			<div class="conteneur">
				<span>
					<a href="https://<?php echo IP_ADDRESS; echo RACINE_SITE; ?>boutique.php" title="MonSite">MonSite.com</a>
                </span>
				<nav>
					<?php
					if(internauteEstConnecteEtEstAdmin()) // admin
					{ // BackOffice
						echo '<a href="' . RACINE_SITE . 'admin/gestion_membre.php">| Gestion des membres</a>';
#						echo '<a href="' . RACINE_SITE . 'admin/gestion_commande.php">| Gestion des commandes</a>';
						echo '<a href="' . RACINE_SITE . 'admin/gestion_boutique.php">| Gestion de la boutique</a>';
					}
					if(internauteEstConnecte()) // membre et admin
					{
						echo '<a href="' . RACINE_SITE . 'profil.php">| Voir votre profil</a>';
						echo '<a href="' . RACINE_SITE . 'boutique.php">| Acces a la boutique</a>';
						echo '<a href="' . RACINE_SITE . 'panier.php">| Voir votre panier</a>';
						echo '<a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">| Se d' . EAA . 'connecter</a>';
					}
					else // visiteur
					{
						echo '<a href="' . RACINE_SITE . 'inscription.php">| Inscription</a>';
						echo '<a href="' . RACINE_SITE . 'connexion.php">| Connexion</a>';
						echo '<a href="' . RACINE_SITE . 'boutique.php">| Acc' . EAG . 's ' . AAG . ' la boutique</a>';
						echo '<a href="' . RACINE_SITE . 'panier.php">| Voir votre panier</a>';
					}
					?>
				</nav>
			</div>
        </header>
        <section>
			<div class="conteneur">
