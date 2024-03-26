<?php
// On créer les variables par défaut (pas besoin si tu a déjà mis 0 par defaut dans ta bdd)
$tailles = array('lunette' => 1, 'moustache' => 1, 'chapeau' => 1, 'cheveux' => 1,  'boucle' => 1 , 'barbe' => 1   );

// On attribue la variable correspondante
foreach($_POST['taille'] as $taille => $value){
  if($value == 1){
    $tailles[$taille] = 1;
  }
}

// On insert dans la bdd


var_dump($_POST)

?>