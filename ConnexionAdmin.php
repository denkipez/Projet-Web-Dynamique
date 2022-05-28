<?php

$login=isset($_POST["username"])? $_POST["username"]:"";
$mdp=isset($_POST["password"])? $_POST["password"]:"";
$nb="";
$result="";

        //BDD------------------------------\\
        $database = "omnessante";
        $db_handle = mysqli_connect('localhost', 'root', '' );
        $db_found = mysqli_select_db($db_handle, $database);
         
        if ($db_found){
                $sql = "SELECT COUNT(*) FROM administrateur WHERE Courriel='"."$login"."' AND Mdp='"."$mdp"."'";
                $resultat =mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($resultat)){
                        $nb=$data['COUNT(*)'];
                } 
                if($nb==1){
                        session_start();
                        $_SESSION['login'] =$login;
                        $_SESSION['password']   =$mdp;
                        $_SESSION['time']     = time();
                        header('location: accueil.html');
                        
                }

                else{ 
                        header('Location: ConnexionAdmin.html');
                        ?>  <script>
                        alert("Identifiants et/ou mot de passe inconnu.");</script>
                <?php
                }
        }
        

                ?>