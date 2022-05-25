
<?php
        //BDD------------------------------\\
         $database = "omnes_sante"
         $db_handle = mysqli_connect('localhost', 'root', '' );
        $db_found = mysqli_select_db($db_handle, $database);
        
        if(isset($_POST["submit"])){
            $sql = "SELECT Identifiant FROM patient"
            if("username"=$sql){
                echo "OK";
            }
            else(echo "<p style='color:red'>Utilisateur incorrect</p>";)
        }

?>