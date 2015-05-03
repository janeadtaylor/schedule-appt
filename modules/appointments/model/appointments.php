<?php

/**
 * Database model for Appointments
 */

class Appointments Extends DB {

    public function __construct(){
        parent::__construct();
    }
    
    public function insert($appointment) {  
        $sql = "INSERT INTO appointments (
            user_id_seeker,
            user_id_manager,
            date)
          VALUES (?, ?, ?)";
        
        $userIdSeeker = $appointment->getUser_id_seeker();
        $userIdManager = $appointment->getUser_id_manager();
        $appointmentDate = $appointment->getDate();

        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("iis", $userIdSeeker, $userIdManager, $appointmentDate);
        $stmt->execute();
        
        return mysqli_insert_id($this->mysqli);
    }
    
    public function getAllManagerAppointmentsByUserId($id) {
        $sql = "
            SELECT appointments.*, users.user_type_id, users.name, users.email from appointments
            INNER JOIN users ON users.id = appointments.user_id_seeker
            WHERE user_id_manager = ? AND date > NOW()
            ORDER BY date ASC";
         
        $data = array();
    
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $results = $stmt->get_result();
    
        while($row = $results->fetch_array(MYSQLI_ASSOC)) {
            $user = new User();
            $user->setId($id);
            $user->setUser_type_id($row["user_type_id"]);
            $user->setName($row["name"]);
            $user->setEmail($row["email"]);
    
            $appointment = new Appointment();
            $appointment->setId($row["id"]);
            $appointment->setDate($row["date"]);
            
            $data['appointments'][$row["id"]]['appointment'] = $appointment;
            $data['appointments'][$row["id"]]['user'] = $user;
        }
    
        return $data;
    }
    
    public function getAllSeekerAppointmentsByUserId($id) {
        $sql = "
            SELECT appointments.*, users.user_type_id, users.name, users.email from appointments
            INNER JOIN users ON users.id = appointments.user_id_manager
            WHERE user_id_seeker = ? AND date > NOW()
            ORDER BY date ASC";
         
        $data = array();
    
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $results = $stmt->get_result();
    
        while($row = $results->fetch_array(MYSQLI_ASSOC)) {
            $user = new User();
            $user->setId($id);
            $user->setUser_type_id($row["user_type_id"]);
            $user->setName($row["name"]);
            $user->setEmail($row["email"]);
    
            $appointment = new Appointment();
            $appointment->setId($row["id"]);
            $appointment->setDate($row["date"]);
            
            $data['appointments'][$row["id"]]['appointment'] = $appointment;
            $data['appointments'][$row["id"]]['user'] = $user;
        }
    
        return $data;
    }
    
}