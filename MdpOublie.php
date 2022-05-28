
<?php

$identifiant=isset($_POST["username"])? $_POST["username"]:"";
$nb="";
$result="";
        //BDD------------------------------\\
         $database = "omnes_sante";
         $db_handle = mysqli_connect('localhost', 'root', '' );
         $db_found = mysqli_select_db($db_handle, $database);
        
        if($db_found){
            $sql = "SELECT COUNT(*) FROM patient WHERE Identifiant='".$identifiant."'";
            $result=mysqli_query($db_handle,$sql);   
            $nb=mysqli_fetch_row($result);
            if($nb==1){
                
            }
            else{echo ("<p style='color:red'>Utilisateur incorrect</p>");}
        }

?>