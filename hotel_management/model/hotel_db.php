<?php
require "../../model/database.php";

class Hotels{
    private $loaction,$hotel_name,$food_name;

    public function __construct($location,$hotel_name,$food_name){
        $this->loaction = $location;
        $this->hotel_name = $hotel_name;
        $this->food_name = $food_name;
    }

    public function get_food_by_hotel($hotel_name){
        global $db;
        
        $sql = 'select * from hotel where Restaurant = :hotel';
    }
    public function get_all_hotel($city = 'chennai'){
        global $db;

        $sql = 'select Restaurant,Restaurant_adrs,city from hotel where city = :city';
        $statement = $db->prepare($sql);
        $statement->bindValue(':city',$city);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}
