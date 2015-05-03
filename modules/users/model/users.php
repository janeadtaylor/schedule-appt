<?php

/**
 * Database model for Users
 */

class Users Extends DB {

    public function __construct(){
        parent::__construct();
    }
    
    public function getById($id) {
        $sql = "SELECT * from users WHERE id = $id";
       
        $user = new User();
        
        $results = $this->exec($sql);     
        while($row = $results->fetch_assoc()) {
            $user = new Job();
            $user->setId($row["id"]);
            $user->setEmail($row["email"]);
        }
        
        return $user;
    }
    
}