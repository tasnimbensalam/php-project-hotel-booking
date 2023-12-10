<?php
include_once(__DIR__ . '/../models/hotels.php');
include_once(__DIR__ . '/../database/config/config.php');

class Hotelscontroller extends Connexion{


    function __construct() {
        parent::__construct();
        }

        function insert(Hotels $h){
        
            $query="insert into hotels (name, image, description, location)values(?, ?, ?, ?)";
            $res=$this->conn->prepare($query);
            
            $aryy =array($h->getName(),$h->getImage(),$h->getDescription(),$h->getLocation()) ;
            //var_dump($aryy);
            return $res->execute($aryy);}

            function listeHotels(){
                $query = "select * from hotels";
                $res=$this->conn->prepare($query);
                $res->execute();
                $allhotels=$res->fetchAll(PDO::FETCH_OBJ);
                return $allhotels;
                }

            
                function hotelsbydisp() {
                    $query = "SELECT * FROM hotels WHERE status = 1";
                   
                    $res = $this->conn->prepare($query);
                    $res->execute();
                    $array = $res->fetchAll(PDO::FETCH_ASSOC);
                   
                    return $array;
                }
                function getHotelById($id){
                    $query="SELECT * FROM hotels WHERE id=? ";
                    $res = $this->conn->prepare($query);
                    $res->execute([$id]);
                    $array = $res->fetch(PDO::FETCH_ASSOC);
                    return $array;
                }
                
              
            
            function updatee($id,$name, $description, $location){
                $query = "UPDATE hotels set name=?,  description=?, location=? where id= ?";
                $hotel=$this->conn->prepare($query);
               
                $hotel->execute(array($name,$description,$location,$id));
                
            }
            
        function update($status, $id){
            $update = $this->conn->prepare("UPDATE hotels SET status = ? WHERE id = ?");
            $update->execute(array($status, $id));
        }

        function delete($hotelId){
            $query = "DELETE FROM hotels WHERE id = ?";
            $stmt = $this->conn->prepare($query);

            $stmt->execute([$hotelId]);
        }
        public function getCountHotels() {
            $stmt = $this->conn->query("SELECT COUNT(*) AS count_hotels FROM hotels");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
}