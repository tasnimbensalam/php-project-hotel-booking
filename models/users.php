<?php

class Users {
private $username,$email,$mypassword;
function __construct($username = "", $email = "", $mypassword = "") {
    $this->username = $username;
    $this->email = $email;
    $this->mypassword = $mypassword;
}

// Getter methods
public function getUsername() {
    return $this->username;
}

public function getEmail() {
    return $this->email;
}

public function getMyPassword() {
    return $this->mypassword;
}

// Setter methods
public function setUsername($username) {
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