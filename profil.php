<?php
session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Profil</title>
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
                <section id="sectionprofil">
                    <h2 id="messageh2">Modifier mon profil</h2>
            <?php include("profilinclude.php");?>
        </section>
        </main>
    </body>
</html>