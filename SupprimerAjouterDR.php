<?php
            $servname = "localhost"; $dbname = "omnessante"; $user = "root"; $pass = "";
            
			if (isset($_POST['Delete'])) {
			
			$deleteID = $_POST["deleteID"];
            
			try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "DELETE FROM `personnelsante` WHERE IDPERSONNEL='".$deleteID."'"; 
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
				
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
		}

		if (isset($_POST['Add'])) {

			$addID = $_POST["addID"];
			$addname = $_POST["addname"];
			$addprenom = $_POST["addprenom"];
			$addEmail = $_POST["addEmail"];
			$addpassword = $_POST["addpassword"];
			$addcategory = $_POST["addcategory"];
			$addPhoto = $_POST["addPhoto"];

			try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "INSERT INTO personnelsante (IDPERSONNEL, Nom, Prenom, Specialite, Courriel, mdp,photo) VALUES ('$addID','$addname','$addprenom','$addEmail','$addpassword','$addcategory','$addPhoto') "; 
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
				
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
		}
                

?>










