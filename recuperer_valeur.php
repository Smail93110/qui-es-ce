<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$regles = [
    "Personnage 1 (0000000)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 2 (0001111)" => [
        "lunettes" => "0000000",
        "moustache" => "0001111",
        "chapeau" => "0000000",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 3 (0010011)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0010011",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 4 (0011100)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0011100",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 5 (0101010)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0101010",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 6 (0110110)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0110110",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 7 (1001001)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "1001001",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 8 (0100101)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0100101",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 9 (1000110)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "1000110",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 10 (1010101)" => [
        "lunettes" => "1010101",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 11 (1011010)" => [
        "lunettes" => "0000000",
        "moustache" => "1011010",
        "chapeau" => "0000000",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 12 (1100011)" => [
        "lunettes" => "1100011",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 13 (1101100)" => [
        "lunettes" => "0000000",
        "moustache" => "0000000",
        "chapeau" => "0000000",
        "cheveux" => "0000000",
        "boucle" => "1101100",
        "barbe" => "0000000"
    ],
    "Personnage 14 (1110000)" => [
        "lunettes" => "1110000",
        "moustache" => "1110000",
        "chapeau" => "0000000",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0000000"
    ],
    "Personnage 15 (1111111)" => [
        "lunettes" => "1111111",
        "moustache" => "1111111",
        "chapeau" => "1111111",
        "cheveux" => "1111111",
        "boucle" => "1111111",
        "barbe" => "1111111"
    ],
    "Personnage 16 (0111001)" => [
     => "0000000",
        "cheveux" => "0000000",
        "boucle" => "0000000",
        "barbe" => "0111001"
    ];




  // Récupérer les réponses de l'utilisateur
    $lunettes = isset($_POST['lunettes']) ? $_POST['lunettes'] : '';
    $moustache = isset($_POST['moustache']) ? $_POST['moustache'] : '';
    $chapeau = isset($_POST['chapeau']) ? $_POST['chapeau'] : '';
    $cheveux = isset($_POST['cheveux']) ? $_POST['cheveux'] : '';
    $boucle = isset($_POST['boucle']) ? $_POST['boucle'] : '';
    $barbe = isset($_POST['barbe']) ? $_POST['barbe'] : '';

    // Concaténer les réponses de l'utilisateur pour former une réponse binaire
    $reponseUtilisateur = $lunettes[0] . $moustache[0] . $chapeau[0] . $cheveux[0] . $boucle[0] . $barbe[0];

    // Parcourir les règles pour chaque personnage
    foreach ($regles as $personnage => $caracteristiques) {
        // Vérifier si les réponses de l'utilisateur correspondent aux règles pour ce personnage
        if ($reponseUtilisateur === implode('', $caracteristiques)) {
            echo "Le personnage est : $personnage";
            // Sortir de la boucle dès qu'une correspondance est trouvée
            break;
        }
    }

    // Si aucune correspondance trouvée, cela signifie que l'utilisateur ment
    if (!isset($personnage)) {
        echo "Vous mentez ! Aucun personnage ne correspond à vos réponses.";
    }
}


  
?>
