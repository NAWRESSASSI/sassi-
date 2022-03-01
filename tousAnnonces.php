<?php
include_once 'navBar.php';
include_once 'models/annonces.php';
include_once 'controller/ControllerAnnonce.php';
?>

<table>




        <thead>
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>description</th>
                <th>code postale</th>
                <th>ville</th>
                <th>type</th>
                <th>price</th>
                <th>reservation_message</th>
            </tr>
        </thead>
       <TBody>
            <?php
                 foreach($AllAnnonceList as $annonce) {?>
                    <tr class="mytable">
                        <td  class="mytable"><?= $annonce['id']?></td>
                        <td><a class="mytable" style="text-transform: uppercase" href="acceuil.php"><?= $annonce['title']?></a></td> 
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