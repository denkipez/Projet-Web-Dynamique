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
    <meta charset='utf-8' />
    <link href='fullcalendar-5.11.0/lib/main.css' rel='stylesheet' />
    <script src='fullcalendar-5.11.0/lib/main.js'></script>
    <script type="text/javascript">

function ValidBouton(info,Test) {
          
          
        if (Test==1) { // valid?
          calendar.addEvent({
            title: 'RDV Patient',
            start: info.startStr,
            end : info.endStr,
            overlap: false
          });
          alert('RDV ajouté ajouté ! ');
        } else {
            alert(Test);
          alert('Prise de RDV impossible');
        }
      }


      document.addEventListener('DOMContentLoaded', function() {
        info=null;
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl,{
      headerToolbar: {
        left: 'prev,next today',
        center:'PrendreRDVButton',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      }, initialDate: '2022-06-01',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,customButtons: {
      PrendreRDVButton : {
        text: 'Prendre RDV',
        click: function ValidBouton(info,Test) {
          
    
          if (Test==true) { // valid?
            calendar.addEvent({
              title: 'RDV Patient',
              start: info.startStr,
              end : info.endStr,
              overlap: false
            });
            alert('RDV ajouté ajouté ! ');
          } else {
            alert(Test);
            alert('Prise de RDV impossible');
           
        }}}}, select: function(info) {
            var Debut=info.startStr;
            var Fin=info.endStr;
            document.cookie ="DEBUT=" + Debut + ";";
            document.cookie ="FIN="+ Fin + ";";

            alert(info.startStr + info.endStr);
            
            
            if (info!=null){
            <?php 
           $DateDebut='<script type="text/javascript">document.write(Debut);</script>';
           $DateFin='<script type="text/javascript">document.write(Fin);</script>';
            $database = "omnessante";
            $db_handle = mysqli_connect('localhost', 'root', '' );
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found && isset($_COOKIE['DEBUT']) && isset($_COOKIE['FIN']) ){
               
                
                $Debut[0]=substr($_COOKIE['DEBUT'],0,10);
                $Debut[1]=mb_substr($_COOKIE['DEBUT'],11,8);
                $Fin[0]=substr($_COOKIE['FIN'],0,10);
                $Fin[1]=mb_substr($_COOKIE['FIN'],11,8);
                print("'".$Debut[0]."';");
                print("'".$Debut[1]."';");
                
                
                $sql="INSERT INTO `rendezvous`(`Date`,`HeureDebut`,`HeureFin`,`IDPATIENT`,`IDPERSONNEL`,`CarteVitale`) VALUES ('".$Debut[0]."','".$Debut[1]."','".$Fin[1]."','".$_SESSION['Id']."','10','".$_SESSION['CarteVitale']."')";
                $resultat=mysqli_query($db_handle,$sql);
                print($resultat);
            }?>}

            var Test= '<?php echo $resultat; ?>';
            ValidBouton(info,Test);

     
    }, <?php 
$contenu="events: ["; 
$resultat="";
$database = "omnessante";
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found){
    $sql = "SELECT * FROM rendezvous  WHERE IDPERSONNEL='3'";
    $resultat =mysqli_query($db_handle,$sql);
    while($data=mysqli_fetch_assoc($resultat)){
        $contenu.="{ title :'RDV Patient', start :'".$data['Date']."T".$data['HeureDebut']."', end : '". $data['Date'] . "T" . $data['HeureFin']."', overlap : 'false'},";
    }
    $contenu.="{}]}";
    echo($contenu);
} ?>);
        calendar.render();
      });

    </script>
</head>
<body>
<body>
    <div id='calendar'></div>
    
  </body>



