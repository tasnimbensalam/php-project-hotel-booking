<?php
require_once(__DIR__ . '/../models/users.php');
require_once(__DIR__ . '/../database/config/config.php');




class Userscontroller extends Connexion{
    
    function __construct() {
        parent::__construct();
        }
        
        function insert(Users $u){
        
        $query="insert into users (username,email, mypassword)values(?, ?, ?)";
        $res=$this->conn->prepare($query);
        
        $aryy =array($u->getUsername(),$u->getEmail(),$u->getMyPassword()) ;
        //var_dump($aryy);
        return $res->execute($aryy);
          
        }
       
    
  
      
        function getUserByEmail($email)
        {
            $query="SELECT * FROM users WHERE email=? ";
            $res = $this->conn->prepare($query);
            $res->execute(array($email));
            $array= $res->fetch(PDO::FETCH_ASSOC);
            return $array;

            
        }
        

        /*
        function delete($idClient) {
        $query = "delete from client where idClient=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idClient));
        }
        function liste(){
        $query = "select * from client";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
        }
        function modifier_user(Client $c)
        {
        $sql = "UPDATE client SET  nom=?, prenom=?,telephone=? WHERE ncin=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getNcin()));
        }
        
        
        }}*/
        
     } ?>