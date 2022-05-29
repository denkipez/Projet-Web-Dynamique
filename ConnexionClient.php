<?php

$login=isset($_POST["username"])? $_POST["username"]:"";
$mdp=isset($_POST["password"])? $_POST["password"]:"";
$resultat="";
$nb="";
$data="";


        //BDD------------------------------\
        $database = "omnessante";
        $db_handle = mysqli_connect('localhost', 'root', '' );
        $db_found = mysqli_select_db($db_handle, $database);

        if ($db_found){
                $sql = "SELECT COUNT() FROM patient WHERE Identifiant='"."$login"."' AND Mdp='"."$mdp"."'";
                $resultat =mysqli_query($db_handle,$sql);
                while($data = mysqli_fetch_assoc($resultat)){
                        $nb=$data['COUNT()'];
                }

                $sql= "SELECT * FROM patient WHERE Identifiant='"."$login"."' AND Mdp='"."$mdp"."'";
                while($data = mysqli_fetch_assoc($resultat)){
                        $IDPATIENT=$data['IDPATIENT'];
                        $CarteVitale=$data['CarteVitale'];
                }

                if($nb==1){
                        session_start();
                        $session['CarteVitale']=$CarteVitale;
                        $_session['Id']=$IDPATIENT;
                        $_SESSION['login'] =$login;
                        $_SESSION['password']   =$mdp;
                        $_SESSION['time']     = time();
                        header('location: accueil.html');
                }

                else{
                        header('location:ConnexionClient.html');
                }

        }



                ?>