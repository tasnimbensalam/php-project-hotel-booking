<?php

class Rooms {
    private $name, $image, $num_persons, $size, $view, $num_beds, $hotel_id, $hotel_name, $status, $price;

    // Constructor
    function __construct($name = "", $image = "", $num_persons = 0, $size = 0, $view = "", $num_beds = 0, $hotel_id = 0, $hotel_name = "", $status = "", $price = 0) {
        $this->name = $name;
        $this->image = $image;
        $this->num_persons = $num_persons;
        $this->size = $size;
        $this->view = $view;
        $this->num_beds = $num_beds;
        $this->hotel_id = $hotel_id;
        $this->hotel_name = $hotel_name;
        $this->status = $status;
        $this->price = $price;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getNumPersons() {
        return $this->num_persons;
    }

    public function getSize() {
        return $this->size;
    }

    public function getView() {
        return $this->view;
    }

    public function getNumBeds() {
        return $this->num_beds;
    }

    public function getHotelId() {
        return $this->hotel_id;
    }

    public function getHotelName() {
        return $this->hotel_name;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getPrice() {
        return $this->price;
    }

    // Setter methods
    public function setName($name) {
        $this->name = $name;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setNumPersons($num_persons) {
        $this->num_persons = $num_persons;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function setView($view) {
        $this->view = $view;
    }

    public function setNumBeds($num_beds) {
        $this->num_beds = $num_beds;
    }

    public function setHotelId($hotel_id) {
        $this->hotel_id = $hotel_id;
    }

    public function setHotelName($hotel_name) {
        $this->hotel_name = $hotel_name;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}
?>
