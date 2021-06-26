<!--           Class and trait             -->

<?php
require_once '../../model/database.php';

/**
    * validating user datas
    */
trait Check_user_data_valied
{
    public function check_for_empty_data(array $arr)
    {
        $count = 0;
        foreach ($arr as $values) {
            if (empty($values)) {
                $count++;
            }
        }
        if ($count === 0) {
            # code...
            return true;
        } else {
            return false;
        }
    }
}

trait get_restarunt_name_trait
{
    public function get_restarunt_name($mobileNo)
    {
        global $db;

        $sql = 'select * from hotel where mobileNo = :mobileNo';
        $statement = $db->prepare($sql) ;
        $statement->bindValue(':mobileNo', $mobileNo);
        $statement->execute();
        $result = $statement->fetchAll();

        return $result[0]['Restaurant'];
    }
}

//                                                     Class for creating restaurant                            

class Create_restaurant_class
{
    use Check_user_data_valied;                         // traid included for validatain

    private $create_restarunt = array('restaurant' => '', 'restaurant_adrs' => '', 'city' => '', 'latitute' => '', 'longitude' => '', 'mobileNo' => '', 'landlineNo' => '', 'owner_name' => '', 'owner_email' => '', 'owner_no' => '');
    public $error_message = array();
    private $arr = array();
    private $user_id;

    public function __construct($user_id,$arr = array())
    {
        $this->create_restarunt['restaurant'] = $arr['Restaurant'];
        $this->create_restarunt['restaurant_adrs'] = $arr['Restaurant_adrs'];
        $this->create_restarunt['city'] = $arr['city'];
        $this->create_restarunt['latitute'] = $arr['latitute'];
        $this->create_restarunt['longitude'] = $arr['longitude'];
        $this->create_restarunt['mobileNo'] = $arr['mobileNo'];
        $this->create_restarunt['landlineNo'] = $arr['landlineNo'];
        $this->create_restarunt['owner_name'] = $arr['owner_name'];
        $this->create_restarunt['owner_email'] = $arr['owner_email'];
        $this->create_restarunt['owner_no'] = $arr['owner_no'];

        $this->arr = $arr;
        $this->user_id = $user_id;
    }


    public function getErrorMessage()
    {
        $arr = $this->arr;
        return $this->check_for_empty_data($arr);
    }

    public function insert_restarunt_details()
    {
        global $db;

        $sql = 'insert into hotel() values(:restaurant_name,:restaurant_adrs,:city,:latitute,:longitude,:mobileNo,:landlineNo,:owner_name,:owner_email,:owner_no);';
        $statment = $db->prepare($sql);
        $statment->bindValue(':restaurant_name', $this->create_restarunt['restaurant']);
        $statment->bindValue(':restaurant_adrs', $this->create_restarunt['restaurant_adrs']);
        $statment->bindValue(':city', $this->create_restarunt['city']);
        $statment->bindValue(':latitute', $this->create_restarunt['latitute']);
        $statment->bindValue(':longitude', $this->create_restarunt['longitude']);
        $statment->bindValue(':mobileNo', $this->create_restarunt['mobileNo']);
        $statment->bindValue(':landlineNo', $this->create_restarunt['landlineNo']);
        $statment->bindValue(':owner_name', $this->create_restarunt['owner_name']);
        $statment->bindValue(':owner_email', $this->create_restarunt['owner_email']);
        $statment->bindValue(':owner_no', $this->create_restarunt['owner_no']);
        try {
            //code...
            $statment->execute();
            return true;
        } catch (PDOException $th) {
            //throw $th;
            $this->error_message[] =  $th->getMessage();
            return false;
        }
    }

    public function get_restarunt_name()
    {
        return $this->create_restarunt['restaurant'];
    }

    public function get_restarunt_address()
    {
        return $this->create_restarunt['restaurant_adrs'];
    }
    public function get_mobile_number()
    {
        return $this->create_restarunt['mobileNo'];
    }

    public function display_restarunt_details()
    {
        foreach ($this->create_restarunt as $details) {
            echo $details . '<br>';
        }
    }

    // this function adds the hotel id to user table 

    public function add_hotelId_to_user(){
        global $db;
        $sql = "update user set hotelID = :hotelID where user_id = :userID;";
        $statement = $db->prepare($sql);
        $statement->bindValue(':hotelID',$this->create_restarunt['mobileNo']);
        $statement->bindValue(':userID',$this->user_id);
        
        try {
            $statement->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    // public static function get_all_hotel_column($user_id){
    //     // set user id as a param
    //     global $db;

    //     $sql = "select * from hotel where mobileNo = (select hotelID from user where user_id = :userID);";
    //     $statement = $db->prepare($sql);
    //     $statement->bindValue(':userID',$user_id);
    //     try {
    //         $statement->execute();
    //         $result = $statement->fetchAll();
    //         return $result;
    //     } catch (\Throwable $th) {
    //         return false;
    //     }
    // }
}

//                                          class for uploading food images and food details

class UploadMenuClass
{
    // include trait function
    use get_restarunt_name_trait;

    private $mobileNo;
    private $image, $price, $category, $veg;

    // constructor function 

    public function __construct(int $mobile)
    {
        $this->mobileNo = $mobile;
    }

    // get tables from images using mobileNo

    public function get_image_table()
    {
        global $db;
        $sql = 'select * from images inner join hotel using(mobileNo) where mobileNo = :num;';
        $statement = $db->prepare($sql);
        $statement->bindValue(':num', $this->mobileNo);
        $statement->execute();
        $result  = $statement->fetchAll();

        if ($statement->rowCount() > 0) {
            return $result;
        } else {
            return 'empty';
        }
    }

    public function insert_image_by_category($category, $item, $aboutfood, $price, $veg_type, $image)
    {
        global $db, $mysql_db;

        $this->category = $category;
        $this->price = $price;
        $this->veg_type = $veg_type;
        $this->image = $image;

        $restaurant_name = $this->get_restarunt_name($this->mobileNo); // useing restaurant name from trait method
        $sql = "insert into images(mobileNo,Restaurant,category,item,aboutfoot,price,veg,img) values('$this->mobileNo','$restaurant_name','$category','$item','$aboutfood','$price','$veg_type','$image');";
        try {
            return $mysql_db->query($sql);
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function get_binary_image()
    {
        $restaurant_name = $this->get_restarunt_name($this->mobileNo);
        return $restaurant_name;
    }

    // this method is to insert banner image and some hotel details 
    public function insert_hotel_banner($image,$about,$per_person){
        global $db, $mysql_db;
        $sql = "insert into hotel_banner(mobileNo,image,about_hotel,per_person) values('$this->mobileNo','$image','$about','$per_person')";
        // $statement = $db->prepare($sql);
        // $statement->bindValue(':mobileNo',$this->mobileNo);
        // $statement->bindValue(':image',$image);
        // $statement->bindValue(':about_hotel',$about);
        // $statement->bindValue(':per_person',$per_person);
        try {
            return $mysql_db->query($sql);
        } catch (\Throwable $th) {
            return false;
        }        
    }

    // this method is to upload menu image to the database
    public function insert_blog_image($image){
        global $db, $mysql_db;
        $sql = "insert into hotel_blog_images(mobileNo,image) values('$this->mobileNo','$image')";
        try {
            return $mysql_db->query($sql);
        } catch (\Throwable $th) {
            return false;
        }
    }
    
    public function insert_hotel_menu($image){
        global $db, $mysql_db;
        $sql = "insert into menu(mobileNo,image) values('$this->mobileNo','$image')";
        try {
            return $mysql_db->query($sql);
        } catch (\Throwable $th) {
            return false;
        }
    }
}

function get_all_hotel_column($user_id){
    // set user id as a param
    global $db;

    $sql = "select * from hotel where mobileNo = (select hotelID from user where user_id = :userID);";
    $statement = $db->prepare($sql);
    $statement->bindValue(':userID',$user_id);
    try {
        $statement->execute();
        $result = $statement->fetch();
        $row   = $statement->rowCount();
        if ($row > 0) {
            return $result;
        }else{
            return 'empty';
        }
    } catch (\Throwable $th) {
        return false;
    }
}