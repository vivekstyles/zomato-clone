<?php
require_once '../../model/database.php';

class Online_order_class{

    private $pureVeg, $rating,$mobileNo;
    public $restaurant_name;
    public function random_food(){
        global $db;
        $sql = "select * from images";

        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        
        return $result;
    }
    
    public function show_hotel_banner(int $mobileNo){
        global $db;
        $this->mobileNo = $mobileNo; 
        $sql = "select * from images where mobileNo = (select mobileNo from hotel where mobileNo = :mobile)";

        $statement = $db->prepare($sql);
        $statement->bindValue(':mobile',$mobileNo);
        try {
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
            
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function show_random_hotels(){
        global $db;

        $sql = "select * from hotel inner join hotel_banner using(mobileNo) where hotel_banner.mobileNo = hotel.mobileNo";

        $statement = $db->prepare($sql);
        try {
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;

        } catch (\Throwable $th) {
            return false;
        }
    }

    public function show_restaurant_images(){
        global $db;
        $sql = "select * from hotel_blog_images where mobileNo = :mobileNo limit 4";
        $statement = $db->prepare($sql);
        $statement->bindValue(':mobileNo',$this->mobileNo);

        try {
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
?>