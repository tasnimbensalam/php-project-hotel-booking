<?php
require_once(__DIR__ . '/../models/users.php');
require_once(__DIR__ . '/../database/config/config.php');




class admincontroller extends Connexion{
    
    function __construct() {
        parent::__construct();
        }
        
        function getAdmin()
            {
                $query = "SELECT * FROM admins";
                $res = $this->conn->prepare($query);
                $res->execute();
                $array = $res->fetchAll(PDO::FETCH_ASSOC);
                return $array;
            }
        
        function createadmin($adminame,$email,$mypassword){
            $insert=$this->conn->prepare('INSERT INTO admins (adminame,email, mypassword) VALUES (?,?,?)');
     
            $insert->bindParam(1,$adminame);
            $insert->bindParam(2, $email);
            $insert->bindParam(3, $mypassword);
            $insert->execute();
        }
        function login($email){
            $login = $this->conn->prepare("SELECT * FROM admins WHERE email=?");
        $login->execute([$email]);
        $fetch = $login->fetch(PDO::FETCH_ASSOC);
        return $fetch;
        }
        public function getCountAdmins() {
            $stmt = $this->conn->query("SELECT COUNT(*) AS count_admins FROM admins");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
       
        
     } ?>