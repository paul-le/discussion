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
                        <li><a href="discussion.php">Discussion</a></li>
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
                <?php
                    include("profilinclude.php");
                    if ( isset($_SESSION['login']) == true ){
                        $connexion = mysqli_connect("localhost", "root","", "discussion");
                        $requete = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."'";
                        $query = mysqli_query($connexion, $requete);
                        $resultat = mysqli_fetch_assoc($query);
                ?>
                    <h1>Modifier mon profil</h1>
                        <form id="connexionform2" method="POST" action="profil.php">
                            <label>Login</label><br><br> <input id="textinputlogin" type="text" name="login" value= " <?php echo $resultat['login']?>" required><br><br>
                            <label>Password</label><br><br> <input type="password" name="password" ><br><br>
                            <label>Password confirmation</label><br><br> <input type="password" name="passwordcon" ><br><br>
                            <input type="submit" value="Changer mes données" name="modifier">
                        </form>
                    <?php } else { ?>
                        <article>
                    <span id="notallowed2"> Vous n'avez pas accès à cette page </span><?php }?>
                        </article>
                </section>
            </main>
        </body>
    </html>