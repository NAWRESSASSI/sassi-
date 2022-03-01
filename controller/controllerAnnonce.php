<?php 
  $RX_NAME = '/^[a-zA-ZàâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý]{1}[a-zA-ZàâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý\s-]{0,49}$/';
  $RX_ADRESS ='/^[a-zA-ZàâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý\d]{1}[a-zA-ZàâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý\d\s-]{0,254}$/';
  $annonce = new annonces();
  $AnnonceList= $annonce->get15annonces();
  $AllAnnonceList=$annonce->getannonces();
 $error=[];
    if(isset($_POST['submit']) || isset($_POST['update'])){
        if (!empty($_POST['title'])){
            if (preg_match($RX_NAME, $_POST['title'])){
              $annonce->title = $_POST['title'];
            }else{
                $error['title'] = "veuillez saisir un titre valide"; 
            }
        }else{
            $error['title'] = "veuillez saisir un titre ";
        }
        if (!empty($_POST['description'])){
                if (preg_match($RX_ADRESS, $_POST['description'])){
                  $annonce->description = $_POST['description'];
              }else{
                  $error['description'] = "veuillez saisir une description  valide"; 
              }
          }else{
              $error['description'] = "veuillez saisir une description ";
               }
        if (!empty($_POST['postal_code'])){
                if (preg_match($RX_ADRESS, $_POST['postal_code'])){
                  $annonce->postal_code = $_POST['postal_code'];
                }else{
                  $error['postal_code'] = "veuillez saisir un contenu  valide"; 
                }
                }else{
                $error['postal_code'] = "veuillez saisir un contenu ";
                }
         if (!empty($_POST['city'])){
            if (preg_match($RX_ADRESS, $_POST['city'])){
              $annonce->city = $_POST['city'];
            }else{
              $error['city'] = "veuillez saisir un city valide"; 
            }
          }else{
            $error['city'] = "veuillez saisir un city ";
          }  
    
          if (!empty($_POST['type'])){
            if (preg_match($RX_ADRESS, $_POST['type'])){
              $annonce->type = $_POST['type'];
            }else{
              $error['type'] = "veuillez saisir un type valide"; 
            }
          }else{
            $error['type'] = "veuillez saisir un type ";
          } 


          if (!empty($_POST['price'])){
            if (preg_match($RX_ADRESS, $_POST['price'])){
              $annonce->price = $_POST['price'];
            }else{
              $error['price'] = "veuillez saisir un price valide"; 
            }
          }else{
            $error['price'] = "veuillez saisir un price ";
          } 

          if (!empty($_POST['reservation_message'])){
            if (preg_match($RX_ADRESS, $_POST['reservation_message'])){
              $annonce->reservation_message = $_POST['reservation_message'];
            }else{
              $error['reservation_message'] = "veuillez saisir un message valide"; 
            }
          }else{
            $error['reservation_message'] = "veuillez saisir un message ";
          } 
          var_dump($error);
         if (empty($error) && isset($_POST['submit'])){
                           
                        var_dump($annonce->createAnnonce());}
                       //header('location: posts.php');
                    // }elseif( isset($_POST['update'])){
                    
                    //     $annonce->id=$_GET['id'];
                    //    $updatPost= $annonce->UpdatePost();
                    //    if($updatPost){
                    //      header('location:posts.php');
                    //    }
                    //   }
    } 