<?php
require_once '../../model/database.php';

class Online_order_class{

    private $pureVeg, $rating, $mobileNo;
    static public $restaurant_name;

    public function random_food(){
        global $db;
        $sql = "select * from images";

        $statement = $db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        
        return $result;
    }
    
    // this method is used to get the banner image
    public function get_hotel_banner(int $mobileNo){
        global $db;
        $this->mobileNo = $mobileNo; 
        // $sql = "select * from images inner join hotel_banner using(mobileNo) where hotel_banner.mobileNo = (select mobileNo from hotel where mobileNo = :mobile)";
        $sql = "select * from images inner join hotel_banner using(mobileNo) inner join hotel using(mobileNo) where hotel_banner.mobileNo = (select mobileNo from hotel where mobileNo = :mobile);";

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
            if ($statement->rowCount() > 0) {
                return $result;
            }

        } catch (\Throwable $th) {
            return false;
        }
    }

    // this method is to show restaurant blog images and customers uploaded images
    public function get_restaurant_images(){
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

    public function get_categorys(){
        global $db;

        // $sql = "select item,count(*) AS total from images where mobileNo = :mobileNo group by(item);";
        $sql = "select category,count(*) AS total from images where mobileNo = :mobileNo group by(category)";
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

    public function get_restaurant_food_images(){
        // this method is used to get all images from given restaurant id
        global $db;

        $sql = "select * from images where mobileNo =:mobile;";
        $statement = $db->prepare($sql);
        $statement->bindValue(':mobile',$this->mobileNo);

        try {
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function get_restaurant_menu_images(){
        global $db;

        $sql = "select * from menu where mobileNo =:mobile;";
        $statement = $db->prepare($sql);
        $statement->bindValue(':mobile',$this->mobileNo);

        try {
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    static function get_food_details_by_foodId($imageID){
        global $db;

        $sql = "select * from images where imageID = :imageID;";
        $statement = $db->prepare($sql);
        $statement->bindValue(':imageID',$imageID);
        try {
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }
    
    static function get_food_name_by_imageID($mobileNo){
        global $db;

        $sql = "select * from images where imageID = :mobielNo;";
        $statement = $db->prepare($sql);
        $statement->bindValue(':mobielNo',$mobileNo);
        try {
            $statement->execute();
            $result = $statement->fetchAll();
            self::$restaurant_name = $result['restaurant'];
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
?>