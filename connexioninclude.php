<?php
    $phraseidincorrect = "";
    $phrasemerciremplir = "";
    $comptevalide = false;

    if ( isset($_POST['connexion']) == true && isset($_POST['login']) && strlen($_POST['login']) != 0 && isset($_POST['password']) && strlen($_POST['password']) != 0 ) 
    {
        $connexion = mysqli_connect("localhost", "root", "", "discussion");
        $requete = "SELECT * FROM utilisateurs";
        $query = mysqli_query($connexion, $requete);
        $resultat = mysqli_fetch_all($query);
        $comptevalide = false;
        foreach ( $resultat as $key => $value ) {
            if ( $resultat[$key][1] == $_POST['login'] && password_verify($_POST['password'], $resultat[$key][2]) ) 
            {
                $comptevalide = true;
                $_SESSION['id'] = $resultat[$key][0];
            }
        }
        if ( $comptevalide == true ) 
        {
            $_SESSION['login'] = $_POST['login'];
            header('Location: index.php');
        }
        else 
        {
            $mauvaislogs = "Identifiant ou mot de passe incorrect.";
        }

        mysqli_close($connexion);
    }

?>

<!DOCTYPE html>
    <html>
        <head>
	        <title>Accueil</title>
            <link rel="stylesheet" href="style.css">
        </head>

<?php if(!isset($_SESSION['id'])) { ?>
    <form id='connexionform' action='' method=POST><span id="connexionformspan">Connexion</span><br><br>
        <input class='inputco' type='text' placeholder='Identifiant' name='login' required><br><br>
        <input class='inputco' type='password' placeholder='Mot de passe' name='password' required><br><br>
        <input class='inputco' type='submit' name='connexion' value='Se connecter'>
    </form>
<?php } else { ?>
    <article>
        Vous êtes déjà connecté(e) !
    </article>
    <?php
    echo $mauvaislogs; 
}
    ?>

    </html>