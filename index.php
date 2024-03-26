<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui-est-ce</title>
    
    <link href="index.css" rel="stylesheet" />

    <link rel="icon" href="img/quiestce.png" height="200" width="20">
</head>
<body>
    
    <h1> Qui est-ce  </h1>

    <div class="container">
        
        <img src="./img/personnage/0000000.jpg" alt="image" id="1">
        <img src="./img/personnage/0001111.jpg" alt="image">
        <img src="./img/personnage/0010011.jpg" alt="image">
        <img src="img/personnage/0011100.jpg" alt="image">
        <img src="img/personnage/0101010.jpg" alt="image">
        <img src="img/personnage/0110110.jpg" alt="image">
       <img src="img/personnage/1001001.jpg" alt="image">
       <img src="img/personnage/0100101.jpg" alt="image">
       <img src="img/personnage/1000110.jpg" alt="image">
       
       <img src="./img/personnage/1010101.jpg" alt="image">
       <img src="./img/personnage/1011010.jpg" alt="image">
       <img src="./img/personnage/1100011.jpg" alt="image">
       <img src="img/personnage/1101100.jpg" alt="image">
       <img src="img/personnage/1110000.jpg" alt="image">
       <img src="img/personnage/1111111.jpg" alt="image">
      <img src="img/personnage/0111001.jpg" alt="image">
        
        
        </div> 
        
        <form action="recuperer_valeur.php" method="post">     
  <h2 id="Q1">1. A-t-il des lunettes ?</h2>
  <input id="b1O" type="checkbox" value="Oui"  name="taille[lunette]">



  <h2 id="Q1">1. A-t-il une moustache </h2>
  <input id="b1O" type="checkbox" value="Oui"  name="taille[moustache]" >


  <h2 id="Q1">3. A-t-il un chapeau ? </h2>
  <input id="b1O" type="checkbox" value="Oui" name="taille[chapeau]" >

  
  <h2 id="Q1">4. A-t-il des cheveux ?</h2>
  <input id="b1O" type="checkbox" value="Oui" name="taille[cheveux]" >


  <h2 id="Q1">5. A-t-il une boucle d'oreille ? </h2>
  <input id="b1O" type="checkbox" value="Oui" name="taille[boucle]" >

  
  <h2 id="Q1">6. A-t-il une barbe ?</h2>
  <input id="b1O" type="checkbox" value="Oui" name="taille[barbe]" >

  

  <input id="bouton" type="button" value="Cliquez pour avoir la réponse" onclick="affiche(m)">


</form>

  
</body>
</html>