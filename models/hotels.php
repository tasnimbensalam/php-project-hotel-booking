<?php

class Hotels {
    private $name, $image, $description, $location, $status;

    // Constructor
    function __construct($name = "", $image = "", $description = "", $location = "", $status = "") {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->location = $location;
        $this->status = $status;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getStatus() {
        return $this->status;
    }

    // Setter methods
    public function setName($name) {
        $this->name = $name;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}
?>
