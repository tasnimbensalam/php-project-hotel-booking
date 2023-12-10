<?php

class Bookings {
    private $check_in, $check_out, $email, $full_name, $user_id, $phone_number, $hotel_id, $hotel_name, $status, $payment;

    public function __construct($check_in, $check_out, $email, $full_name, $user_id, $phone_number, $hotel_id, $hotel_name, $status, $payment) {
        $this->check_in = $check_in;
        $this->check_out = $check_out;
        $this->email = $email;
        $this->full_name = $full_name;
        $this->user_id = $user_id;
        $this->phone_number = $phone_number;
        $this->hotel_id = $hotel_id;
        $this->hotel_name = $hotel_name;
        $this->status = $status;
        $this->payment = $payment;
    }

    // Getters
    public function getCheckIn() {
        return $this->check_in;
    }

    public function getCheckOut() {
        return $this->check_out;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFullName() {
        return $this->full_name;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
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

    public function getPayment() {
        return $this->payment;
    }

    // Setters
    public function setCheckIn($check_in) {
        $this->check_in = $check_in;
    }

    public function setCheckOut($check_out) {
        $this->check_out = $check_out;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFullName($full_name) {
        $this->full_name = $full_name;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function setPhoneNumber($phone_number) {
        $this->phone_number = $phone_number;
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

    public function setPayment($payment) {
        $this->payment = $payment;
    }
}
?>