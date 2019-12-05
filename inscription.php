<?php
    session_start();
    include("inscriptioninclude.php");
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
                <section id="sectionformins">
                    <article>
                        <?php if(!isset($_SESSION['login'])){ ?>
                            <h1 id="h1ins">INSCRIPTION</h1><br/><br/>
                                <form method="post" id="forminscription" action="inscription.php">
                                    <input type="text" placeholder="Identifiant" name="login" required><br/><br/>
                                    <input type="password" placeholder="Mot de passe" name="mdp" required><br/><br/>
                                    <input type="password" placeholder="Confirmation mot de passe" name="cmdp" required><br/><br/>
                                    <input type="submit" value="S'inscrire" name="inscrire" required>
                                </form>
                                <br><br>
                        <?php } else { ?>
                            <article>
                                Vous êtes déjà inscrit !
                            </article>
                        <?php } 
                        if ( isset($_POST['inscrire']) == true &&  isset($_POST['login']) && strlen($_POST['login']) == 0 || isset($_POST['mdp']) && strlen($_POST['mdp']) == 0 || isset($_POST['cmdp']) && strlen($_POST['cmdp']) == 0 ){?>
                        <article>Merci de remplir tous les champs.</article>
                        <?php
                            }
                        if ($dejainscrit == true){ ?>
                        <article>Identifiant déjà pris !</article>
                        <?php
                            }
                            if ( isset($_POST['inscrire']) == true && $_POST['mdp'] != $_POST['cmdp'] ) { ?>
                        <article id="notsamepswd">/!\  Les mots de passe ne sont pas les mêmes   /!\</article>
                        <?php } elseif (isset($_SESSION['login'])) { ?>
                        <article>Vous êtes déjà connecté !</article>
                        <?php }?>
                    </article>
                </section>
            </main>
        </body>
    </html>