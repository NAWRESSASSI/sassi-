<?php
include_once'navBar.php';
include_once 'models/annonces.php';
include_once 'controller/ControllerAnnonce.php';
?>

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
                 foreach($AllAnnonceList as $annonce) {?>
                    <tr class="mytable">
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