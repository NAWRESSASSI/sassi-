<?php
include 'navBar.php';
include 'models/annonces.php';
include 'controller/ControllerAnnonce.php';
?>
<main>
    <form method="POST">
        <div class="mydiv">
             <input type="text" name="title" placeholder="titre" value="<?=isset($_GET['update']) ? $OnePost['title'] :"" ?>">
             <span><?=   isset($error['title'])?$error['title']:''?></span>
        </div>
        <div class="mydiv">
            <input type="text" name="description" placeholder="description"  value="<?=isset($_GET['update'])?$OnePost['description'] :"" ?>">
            <span><?=  isset($error['description'])?$error['description']:''?></span>
        </div>
        <div class="mydiv">
            <input type="text" name="postal_code" placeholder="code postale "  value="<?=isset($_GET['update'])? $OnePost['postal_code'] :"" ?>">
            <span><?= isset( $error['postal_code'])?$error['postal_code']:''?></span>
        </div>
     
        <div class="mydiv">
            <input type="text" name="city" placeholder="ville "  value="<?=isset($_GET['update']) ? $OnePost['city'] :"" ?>">
            <span><?= isset( $error['city'])?$error['city']:''?></span>
        </div>
        <div class="mydiv">

          <select name="type" value="<?=isset($_GET['update']) ? $OnePost['type'] :"" ?>" >
             <option value="">--type--</option>
              <option value="location">location</option>
              <option value="vente">vente</option>
            <span><?= isset( $error['type'])?$error['type']:''?></span>
        </div>
        <div class="mydiv">
            <input type="text" name="price" placeholder="prix "  value="<?=isset($_GET['update']) ? $OnePost['type'] :"" ?>">
            <span><?= isset( $error['price'])?$error['price']:''?></span>
        </div>
        <div class="mydiv">
            <input type="text" name="reservation_message" placeholder="message"  value="<?=isset($_GET['update']) ? $OnePost['type'] :"" ?>">
            <span><?= isset( $error['reservation_message'])?$error['reservation_message']:''?></span>
        </div>
             <div class="mydiv">
             <?php
            if(isset($_GET['update'])){?>
                   <input type="submit"name="update" value="modifier" class="btn btn-outline-primary">
                  <? header('location:posts.php')?>
           <?php } else{?>
               <input type="submit"name="submit" value="Valider" class="btn btn-outline-primary">
          <?php }?>
          </div>

    </form>
</main>