<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>Accueil Omnes santé</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/LOGO_OMNESSANTE.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="MedecinGeneraliste.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="containerMedecin">

    <?php
    $contenu="";
   
    $result="";
    $database = "omnessante";
    $db_handle = mysqli_connect('localhost', 'root', '' );
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found){
        $sql = "SELECT * FROM personnelsante  WHERE Specialite!='Generaliste'";
        $resultat =mysqli_query($db_handle,$sql);
        while($data = mysqli_fetch_assoc($resultat)){
            $contenu.='<div class="container4 square rounded p-5">';
            $contenu.='<div class="image"><img class="img1 rounded" src="'. $data['Photo'].'"></div>';
            $contenu.='<div style="line-height: 1rem; height: 96px;" class="text"><p1 class=text-container1><strong>'.$data['Nom'] .' ' .  $data['Prenom'] .'</strong><br>';
            $contenu.='Specialiste en '. $data['Specialite'].'<br><br><a1 class="btn btn-custom">En savoir plus</a></p></div></div>';

               
        }}
        echo($contenu); ?>



    </div>
</body>
