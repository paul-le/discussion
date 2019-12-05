<?php
    $dejainscrit = false;
    if ( isset($_POST['mdp']) ) 
        {
        $pwd = $_POST['mdp'];
        $pwd = password_hash( $pwd, PASSWORD_BCRYPT, array('cost' => 12, ) );
        }
        $connexion = mysqli_connect("localhost", "root", "", "discussion");

    if ( isset($_POST['inscrire']) == true &&  $_POST['mdp'] == $_POST['cmdp'] && isset($_POST['login']) && strlen($_POST['login']) != 0 && isset($_POST['mdp']) && strlen($_POST['mdp']) != 0 && isset($_POST['cmdp']) && strlen($_POST['cmdp']) != 0) 
    {
        $requete2 = "SELECT * FROM utilisateurs";
        $query2 = mysqli_query($connexion, $requete2);
        $resultat = mysqli_fetch_all($query2);
        foreach ( $resultat as $key => $value ) 
        {
            if ( $resultat[$key][1] == $_POST['login'] ) 
            {
                $dejainscrit = true;
            }
        }
        if ( $dejainscrit == false ) {
            $requete = "INSERT INTO utilisateurs (login, password) VALUES('".$_POST['login']."', '".$pwd."')";
            $query = mysqli_query($connexion, $requete);
            header('Location: connexion.php');
        }

        mysqli_close($connexion);
    }
?>