<?php
include 'connection_db.php';
$reponse=mysqli_query($base,'select * from messages' );
echo 'Voici les informations des visiteurs qui ont remplit le formulaire:';
echo '<br>';
while($tab=mysqli_fetch_assoc($reponse)){
    echo implode('----',$tab);
    echo '<br>';
}