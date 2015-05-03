<?php

/**
 * Database model for Appointments
 */

class Appointments Extends DB {

    public function __construct(){
        parent::__construct();
    }
    
    public function insert($data) {  
        //insert new appointment
        $appointment = $data['appointment'];

        $sql = "INSERT INTO appointments (
            user_id,
            name,
            file)
          VALUES (?, ?, ?)";
 
        $userIdSeeker = $appointment->getUser_id_seeker();
        $userIdManager = $appointment->getUser_id_manager();
        $appointmentDate = $appointment->getDate();

        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("iis", $userIdSeeker, $userIdManager, $appointmentDate);
        $stmt->execute();
        
        return mysqli_insert_id($this->mysqli);
    }
}