<?php

// Fonction pour afficher les images des personnages
function afficherPersonnages() {
  $personnages = [
    // Tableau associatif contenant les images et les caractéristiques des personnages
    1 => ["image" => "./img/personnage/0000000.jpg", "caractéristiques" => ["lunettes" => false, "moustache" => false, "chapeau" => true, ...]],
    // ... (ajouter plus de personnages)
  ];

  foreach ($personnages as $id => $personnage) {
    echo "<img src='{$personnage['image']}' alt='Personnage {$id}'>";
  }
}

// Fonction pour traiter les réponses du joueur
function verifierMensonge($reponse, $caractéristique, $personnageMystere) {
  $reponse = strtolower($reponse); // Convertir la réponse en minuscules
  $caractéristique = strtolower($caractéristique); // Convertir la caractéristique en minuscules

  $mensonge = false; // Variable pour stocker si un mensonge est détecté

  if ($reponse === "oui") {
    if (!$personnageMystere[$caractéristique]) {
      $mensonge = true; // Le joueur a dit "oui" alors que la caractéristique est fausse
    }
  } else if ($reponse === "non") {
    if ($personnageMystere[$caractéristique]) {
      $mensonge = true; // Le joueur a dit "non" alors que la caractéristique est vraie
    }
  }

  return $mensonge;
}


//recuperer les données
$lunettes = isset($_POST['lunettes']) ? $_POST['lunettes'] : '';
$moustache = isset($_POST['moustache']) ? $_POST['moustache'] : '';
$chapeau = isset($_POST['chapeau']) ? $_POST['chapeau'] : '';
$cheveux = isset($_POST['cheveux']) ? $_POST['cheveux'] : '';
$boucle = isset($_POST['boucle']) ? $_POST['boucle'] : '';
$barbe = isset($_POST['barbe']) ? $_POST['barbe'] : '';

// Début du code principal
$personnages = [
  // ... (remplir le tableau des personnages avec leurs images et caractéristiques)
];

// Sélectionner un personnage mystère aléatoire
$personnageMystereId = rand(1, count($personnages));
$personnageMystere = $personnages[$personnageMystereId];

// Afficher les images des personnages
afficherPersonnages();

// Formulaire pour poser des questions
if (isset($_POST['question']) && isset($_POST['reponse'])) {
  $question = $_POST['question'];
  $reponse = $_POST['reponse'];
  $caractéristique = $_POST['caractéristique'];

  // Vérifier si le joueur ment
  $mensonge = verifierMensonge($reponse, $caractéristique, $personnageMystere);

  // Afficher le résultat de la question
  echo "<p>Résultat: {$question} ? {$reponse}</p>";

  if ($mensonge) {
    echo "<p>Indice de mensonge !</p>";
  }
}

?>
