<?php

class Admin {
private $username,$email,$mypassword;
function __construct($adminame = "", $email = "", $mypassword = "") {
    $this->username = $adminame;
    $this->email = $email;
    $this->mypassword = $mypassword;
}

// Getter methods
public function getAdminame() {
    return $this->username;
}

public function getEmail() {
    return $this->email;
}

public function getMyPassword() {
    return $this->mypassword;
}

// Setter methods
public function setAdminame($username) {
    $this->username = $username;
}

public function setEmail($email) {
    $this->email = $email;
}

public function setMyPassword($mypassword) {
    $this->mypassword = $mypassword;
}
}
?>