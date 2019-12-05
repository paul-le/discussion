<?php
        /*$connexion = mysqli_connect("localhost", "root","", "discussion");
        $requete = "SELECT login,password FROM utilisateurs WHERE login='".$_SESSION['login']."'";
        $query = mysqli_query($connexion, $requete);
        $resultat = mysqli_fetch_all($query);       
        $login = $resultat[0][0];
        $mdp = $resultat[0][1];


    if(isset($_POST['modifier']))
    {
        if(!empty($_POST['login']) && $login != $_POST['login'])
        {
            $login = $_POST['login'];
            $_SESSION['login'] = $_POST['login'];
        }
        if(!empty($_POST['mdp']) && $mdp != $_POST['password'])
        {
            $mdp = password_hash($_POST['password'],PASSWORD_BCRYPT,array('cost'=>12));
        }
    }
    
        $requeteupdate = "UPDATE login,password SET login='$login' , password='$mdp' WHERE login='".$_SESSION['login']."'";*/



        $connexion = mysqli_connect("localhost", "root","", "discussion");
        $requete = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."'";
        $query = mysqli_query($connexion, $requete);
        $resultat = mysqli_fetch_assoc($query);

    if(isset($_POST['modifier']))
    {
        $requeteupdate = "UPDATE utilisateurs SET login='".$_POST['login']."' WHERE login = '".$_SESSION['login']."'";

        if($resultat['login'] != $_POST['login'])
        {
            mysqli_query($connexion,$requeteupdate);
            $_SESSION['login'] = $_POST['login'];
            header('Location: profil.php');
        }
        elseif($resultat['password'] != $_POST['password'])
        {
            if($_POST['password'] != NULL)
            {
            $pwd=$_POST['password'];
            $pwd=password_hash($pwd,PASSWORD_BCRYPT,array('cost'=>12));
            $requeteupdate = "UPDATE utilisateurs SET password='".$pwd."' WHERE login = '".$_SESSION['login']."'";
            mysqli_query($connexion,$requeteupdate);
            header('Location: profil.php');
            }
            elseif($_POST['password'] == NULL)
            {}
        }
        else
        {
            echo " Impossible de changer d'informations ";
        }
    }

?>