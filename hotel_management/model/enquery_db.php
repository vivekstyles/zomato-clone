<?php
require '../../model/database.php';

class Contuct
{
    private $fullName,$phoneNo,$email,$restaurant_name,$city;
    
    public function __construct($FullName,$PhoneNo,$Email,$Restaurant_name,$City)
    {
        $this->fullName = $FullName;
        $this->phoneNo = $PhoneNo;
        $this->email = $Email;
        $this->restaurant_name = $Restaurant_name;
        $this->city = $City;
    }
    
    public function insert_enquery_detail(){
        global $db;
        $name = $this->fullName;
        $phone = $this->phoneNo;
        $email = $this->email;
        $restaurant_name = $this->restaurant_name;
        $city = $this->city;
        
        $query = 'insert into enquery() values(:name,:phone,:email,:restaurant,:city);';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':name',$name);
        $statement->bindValue(':phone',$phone);
        $statement->bindValue(':email',$email);
        $statement->bindValue(':restaurant',$restaurant_name);
        $statement->bindValue(':city',$city);

        try {
            //code...
            $statement->execute();
            if ($statement->rowCount() == 1) {
                # code...
                return true;
            }else{
                return false;
            }
        } catch (PDOException $th) {
            //throw $th;
            return false;
        }
    }

    public function get_user_name(){
        return $this->fullName;
    }

}



?>
