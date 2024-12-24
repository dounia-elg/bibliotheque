<?php  
require_once 'db.php';

$result = $conn->query("SELECT * FROM livres");

//var_dump($result);

$array = mysqli_fetch_array($result);

//var_dump($array);
    while ($array){
        $id = $array[0];
        $titre = $array['titre'];
        $auteur = $array['auteur'];
        $catregorie = $array[3];
        $date_ajout = $array['date_ajout'];
        $disponible = $array[5];

        echo $id . "    ||    ";
        echo $titre . "    ||    ";
        echo $auteur . "    ||    ";
        echo $catregorie . "    ||    ";
        echo $date_ajout . "    ||    ";
        echo $disponible . "    ||    ";
        echo '<br>';
        echo '<hr>';

        $array = mysqli_fetch_array($result);
        
        //var_dump($result);

    };

    

    