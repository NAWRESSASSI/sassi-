<?php
include_once 'database.php';

class annonces extends database {
    private $db;
    public $id="";
    public $title = "";
    public $description= "";
    public $postal_code="";
    public $city= true;
    public $type="";
    public $price="";
    public $reservation_message="";
   
    public function __construct(){
        $db = database::getInstance();
        $this->db = $db->getDbh();
    }

    public function createAnnonce(){
        $request = 'INSERT INTO advert (title,description,postal_code,city,type,price,reservation_message) 
                    VALUES (:title,:description ,:postal_code,:city,:type,:price,:reservation_message)';
        $statement = $this->db->prepare($request);
        $statement->bindValue(':title', $this->title, PDO::PARAM_STR);
        $statement->bindValue(':description',$this->description, PDO::PARAM_STR);
        $statement->bindValue(':postal_code',$this->postal_code,PDO::PARAM_STR);
        $statement->bindValue(':city',$this->city,PDO::PARAM_STR);
        $statement->bindValue(':type',$this->type,PDO::PARAM_STR);
        $statement->bindValue(':price',$this->price,PDO::PARAM_INT);
        $statement->bindValue(':reservation_message',$this->reservation_message,PDO::PARAM_INT);
        return $statement->execute();
    }
    public function get15annonces(){
        $request = 'SELECT id,title,description,postal_code,city,type,price,reservation_message FROM advert ORDER BY `id`DESC LIMIT 15';
        $statement= $this->db->prepare($request);
        $statement->execute();
       return $statement->fetchAll(PDO::FETCH_ASSOC);  
    }
    public function getannonces(){
        $request = 'SELECT id,title,description,postal_code,city,type,price,reservation_message FROM advert ORDER BY `id`';
        $statement= $this->db->prepare($request);
        $statement->execute();
       return $statement->fetchAll(PDO::FETCH_ASSOC);  
    }



}