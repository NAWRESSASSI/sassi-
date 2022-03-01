<?php

include_once 'models/annonces.php';
include_once 'controller/ControllerAnnonce.php';
?>

<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="acceuil.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">ajouter une Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tousAnnonces.php">consulter toutes les annonces</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
</body>
</html>



<table>

        <thead>
            <tr>
                <td>titre</td>
                <td>description</td>
                <td>code postale</td>
                <td>ville</td>
                <td>type</td>
                <td>price</td>
                <td>reservation_message</td>
            </tr>
        </thead>
       <TBody>
            <?php
                 foreach($AnnonceList as $annonce) {?>
                    <tr class="mytable">
                        <td class="mytable" style="text-transform: uppercase"><?= $annonce['title']?></td>
                        <td class="mytable"><?= $annonce['description']?></td>
                        <td class="mytable"><?= $annonce['postal_code']?></td> 
                        <td class="mytable"><?= $annonce['city']?></td>
                        <td class="mytable"><?= $annonce['type']?></td>  
                        <td class="mytable"><?= $annonce['price']?></td>
                        <td class="mytable"><?= $annonce['reservation_message']?></td>
                    </tr>
            <?php } ?>
        </TBody>
    </table> 