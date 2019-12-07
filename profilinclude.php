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



        /*$connexion = mysqli_connect("localhost", "root","", "discussion");
        $requete = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."'";
        $query = mysqli_query($connexion, $requete);
        $resultat = mysqli_fetch_assoc($query);

        if(isset($_POST['modifier']))
        {
            if($_POST['password'] != $_POST['passwordcon'])
            {
                echo "Les mots de passe sont différents !";
            }
            elseif(isset($_POST['password']) && !empty($_POST['password']))
            {
                $mdp = password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost' => 12));
                $updatemdp = "UPDATE utilisateurs SET password = '$mdp' WHERE id = '" . $resultat['id'] . "'";
                $query2 = mysqli_query($connexion, $updatemdp);
                header('Location:profil.php');
            }
            $login = $_POST["login"];
            $req = "SELECT login FROM utilisateurs WHERE login = '$login'";
            $req3 = mysqli_query($connexion, $req);
            $logcheck = mysqli_fetch_all($req3);
                if(!empty($veriflog))
                {
                    ?>
                    <p>Login déjà utilisé, requête refusée.<br /></p>
                    <?php
                }
            if(empty($logcheck))
                {
                    $updatelog = "UPDATE utilisateurs SET login ='" . $_POST['login'] . "' WHERE id = '" . $resultat['id'] . "'";
                    $querylog = mysqli_query($connexion, $updatelog);
                    $_SESSION['login']=$_POST['login'];
                    header("Location:profil.php");
                }
        }
        ?>*/


        if (isset($_SESSION['login']))
            {
                $connexion = mysqli_connect("localhost", "root", "", "discussion");
                $requete = "SELECT * FROM utilisateurs WHERE login='" . $_SESSION['login'] . "'";
                $query = mysqli_query($connexion, $requete);
                $resultat = mysqli_fetch_assoc($query);
                ?>
                <form id="forminscription" action="profil.php" method="post">
                    <label> Login<br></label>
                    <input type="text" name="login" value=<?php echo $resultat['login']; ?>><br>
                    <label> New Password<br></label>
                    <input type="password" name="password">
                    <label><br> Confirm New Password<br></label>
                    <input type="password" name="passwordconfirm">
                    <input name="ID" type="hidden" value=<?php echo $resultat['id']; ?>>
                    <br><br>
                    <input type="submit" name="modifier" value="Modifier">
                </form>
                    
                <?php 
                    if (isset($_POST['modifier'])) 
                    {
                         if ($_POST["password"] != $_POST["passwordconfirm"]) 
                         {
                             ?>
                            <p>Attention mots de passe non identiques !</p>
                        <?php
                        } 
                        elseif(isset($_POST['password']) && !empty($_POST['password']))
                        {
                            $pwdx = password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost' => 12));
                            $updatepwd = "UPDATE utilisateurs SET password = '$pwdx' WHERE id = '" . $resultat['id'] . "'";
                            $query2 = mysqli_query($connexion, $updatepwd);
                            header('Location:profil.php');
                        }
                        $login = $_POST["login"];
                        $req = "SELECT login FROM utilisateurs WHERE login = '$login'";
                        $req3 = mysqli_query($connexion, $req);
                        $veriflog = mysqli_fetch_all($req3);
                            if(!empty($veriflog))
                            {
                                ?>
                                <p>Login déjà utilisé <br></p>
                                <?php
                            }
                        if(empty($veriflog))
                            {
                                $updatelog = "UPDATE utilisateurs SET login ='" . $_POST['login'] . "' WHERE id = '" . $resultat['id'] . "'";
                                $querylog = mysqli_query($connexion, $updatelog);
                                $_SESSION['login']=$_POST['login'];
                                header("Location:profil.php");
                            }
                    }
                }
                    else { ?>
                        <span id="notallowed2"><p> Vous n'avez pas accès à cette page</p></span>
                        <?php } ?>