<?php
    session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
	        <title>Accueil</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <header class="headermenu">
                <img id="logoheadercafe" src="images/cafelogo2.png">
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <?php if(isset($_SESSION['login'])){?> <li><a href="discussion.php">Discussion</a></li>
                        <?php } else {?><li><a href="connexion.php">Discussion</a></li><?php }?>
                        <?php if(!isset($_SESSION['login'])) {?>
                        <li><a href="inscription.php">Inscription</a></li>
                        <li><a href="connexion.php">Connexion</a></li>
                        <?php } else { ?>
                        <li><a href="profil.php">Profil</a></li>
                    <ul>
                        <form class="logoutform" method='post' action=''><input class="boutonlogout" type="submit" name="logout" value="Déconnexion">
                        </form>
                        <?php if(isset($_POST['logout'])) {
                            session_destroy();
                            header('Location: connexion.php');    
                        }
                    }?>
                </nav>
            </header>
            <main>
                <section>
                <h1>Bienvenue dans le café <?php if(isset($_SESSION['login'])){ echo ''.$_SESSION['login'].' !';} else{ ?> inconnu(e)<?php }?> </h1>
                        <article id="indexarticle">
                            Tu es obligé s'il te plaît de t'inscrire et de venir discuter avec nous dans la catégorie "Discussion" juste à gauche.
                        </article>
                </section>
            </main>
        </body>
    </html>