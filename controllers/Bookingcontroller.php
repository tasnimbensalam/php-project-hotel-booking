<?php
include_once(__DIR__.'/../models/bookings.php'); 
include_once(__DIR__.'/../database/config/config.php');

class Bookingcontroller extends Connexion{
    function listebookingss(){
        $query = "SELECT * FROM bookings ";
        $res=$this->conn->prepare($query);
        $res->execute();
        $allbookings=$res->fetchAll(PDO::FETCH_ASSOC);
        return $allbookings;
        }
    
    function listebookings($id){
       
        $query = "SELECT * FROM bookings WHERE user_id=?";
        $res=$this->conn->prepare($query);
        $res->execute(array($id));
        $allbookings=$res->fetchAll(PDO::FETCH_ASSOC);
        return $allbookings;
        }


        function insertBooking($check_in,$check_out,$email,$full_name,$phone_number,$hotel_name,$room_name,$user_id) {
            
            $stmt = $this->conn->prepare("INSERT INTO bookings (check_in, check_out, email, full_name, phone_number, hotel_name, room_name, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $check_in);
            $stmt->bindParam(2, $check_out);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $full_name);
            $stmt->bindParam(5, $phone_number);
            $stmt->bindParam(6, $hotel_name);
            $stmt->bindParam(7, $room_name);
            $stmt->bindParam(8, $user_id);

 
    return $stmt->execute();
        }


        function update($status, $id){
            $update = $this->conn->prepare("UPDATE bookings SET status = ? WHERE id = ?");
            $update->execute(array($status, $id));
        }
        public function getCountBoking() {
            $stmt = $this->conn->query("SELECT COUNT(*) AS count_bookings FROM bookings");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

}

    





