<?php

/**
 * Database model for Resumes
 */

class Resumes Extends DB {

    public function __construct(){
        parent::__construct();
    }
    
    public function insert($data) {  
        //insert a new user then insert a resume using the new user id
        $user = $data['user'];
        $user_type_id = $user->getUser_type_id();

        $insertUserSql = "INSERT INTO users (
            user_type_id, 
            name, 
            email, 
            phone) 
          VALUES (
            '". $user->getUser_type_id() ."',
            '". $user->getName() ."',
            '". $user->getEmail() ."',
            '". $user->getPhone() ."'
        )";
        
        $this->exec($insertUserSql);
        
        $newUserId = mysqli_insert_id($this->mysqli);
        
        $resume = $data['resume'];
        
        //set the new resume user id to the new user id just created
        $resume->setUser_id($newUserId);

        $insertResumeSql = "INSERT INTO resumes (
            job_id,
            user_id,
            name,
            file)
          VALUES (
            '". $resume->getJob_id() ."',
            '". $resume->getUser_id() ."',
            '". $resume->getName() ."',
            '". $resume->getFile() ."'
        )";
 
        $this->exec($insertResumeSql);
        
        return mysqli_insert_id($this->mysqli);
    }
}