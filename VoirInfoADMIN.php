<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes">
        <title>Omnes santé</title>
        <link rel="icon" type="image/png" sizes="16x16" href="img/LOGO_OMNESSANTE.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="SupprimerAjouterDR.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <img id="iconeheader" class="logo" src="img/OMNESSANTEVF.png">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Accueil.html">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ConnexionClient.html">Déconnexion</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="TP.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tout parcourir
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Medecinsgeneraliste.php">Médecins généraliste</a>
                <a class="dropdown-item" href="MedecinsSpecialiste.php">Médecins Spécialiste</a>
    
                <a class="dropdown-item" href="#">Laboratoire</a>
    
            </li>
            <li class="nav-item">
			<a class="nav-link" href="VoirRDVV.php">Voir tout les rdv</a>
		  </li>
      <li class="nav-item">
              <a class="nav-link" href="SupprimerAjouterDR.html">Ajouter ou Supprimer Personnel</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
<body>
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd"> Info Personnel </h1>
	<table class="table4">
		<tr>
		<th>IDAdmin</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Courriel</th>
		<th>Mot De Passe</th>
    
		</tr>
    
    <?php
    
    
    $database = "omnessante";
        $db_handle = mysqli_connect('localhost', 'root', '' );
        $db_found = mysqli_select_db($db_handle, $database);
         
        if ($db_found){

         
    
    $login=isset($_POST["username"])? $_POST["username"]:"";
  
    $sql = "SELECT * FROM administrateur WHERE courriel='".$login."'";

		 $result=mysqli_query($db_handle,$sql);
	
			while ($row=mysqli_fetch_assoc($result)) {

				echo "<tr><td>".$row["IDADMIN"]."</td><td>".$row["Nom"]."</td><td>".$row["Prenom"]."</td><td>".$row["courriel"]."</td><td>".$row['Mdp']."</td></tr>";
			}


			echo "</table";
      
    }
	


		

		?>
    </table>
	
</body>
</html>