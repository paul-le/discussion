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
            <main id="messageform">
                <section id="boitedetexte">
                    <article>
                        <?php if (isset($_SESSION['login'])){
                            if ( isset($_POST['envoyer']) == true )
                            {
                            $connexion = mysqli_connect("localhost", "root","", "discussion"); 
                            $requete = "INSERT INTO messages (message,id_utilisateur,date) VALUES('".$_POST['message']."','".$_SESSION['id']."',NOW())";
                            $query = mysqli_query($connexion, $requete);
                            }?>
                        <h1 id="messageh1">Envoyer un message</h1>
                            <form method="POST" action="discussion.php">
                                <br><br><textarea rows="10" cols="45" name="message" placeholder="Votre message" required></textarea><br><br>
                                    <input type="submit" value="Envoyer le message" name="envoyer">
                                
                        <?php } else { ?> <span id="connexionnotallowed">Vous n'avez pas accès à cette page</span><?php }?>
                            </form>
                    </article>
                </section>
                <section id="chat">
                    <article>
                        <?php include("discussioninclude.php") ?>
                    </article>
                </section>
            </main>
        </body>
    </html>