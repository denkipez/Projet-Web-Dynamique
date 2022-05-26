
<?php

$identifiant=isset($_POST["username"])? $_POST["username"]:"";
        //BDD------------------------------\\
         $database = "omnes_sante"
         $db_handle = mysqli_connect('localhost', 'root', '' );
        $db_found = mysqli_select_db($db_handle, $database);
        
        if(isset($_POST["submit"])){
            $sql = "SELECT COUNT(*) FROM patient WHERE Identifiant='".$identifiant."'";
            if("username"=$sql){
                echo "OK";
            }
            else(echo "<p style='color:red'>Utilisateur incorrect</p>";)
        }

?>