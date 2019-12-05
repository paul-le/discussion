<?php
        
                $connexion = mysqli_connect("localhost", "root", "", "discussion");
                $tablogin = "SELECT id,login FROM utilisateurs";
                $tabcomm = "SELECT * FROM messages ORDER BY date DESC";
                $query = mysqli_query($connexion, $tabcomm);
                $resultat = mysqli_fetch_all($query);
                $query2 = mysqli_query($connexion, $tablogin);
                $resultat2 = mysqli_fetch_all($query2);


        $i = 0; 
        while($i < count($resultat))
        {   
          $i2 = 0;
            while($i2 < count($resultat2))
            {
                $date = $resultat[$i][3];
                $date2 = date("d-m-Y H:i:s",strtotime($date));
                if($resultat[$i][2] == $resultat2[$i2][0])
                {
                echo "".$date2." <b>|||</b> ";
                echo "<b> ".$resultat2[$i2][1]."</b> : ";
                echo "<span id=\"chatstyle\">".$resultat[$i][1]."</span><br>";
                
                }
                $i2++;
            }
            $i++;
        }
?> 
