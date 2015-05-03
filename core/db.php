<?php

/**
 * Base database class
 */

class DB {
    //update these values for the given environment
    private $db = 'appointments';
    private $host = 'localhost';
    private $user = 'appointments';
    private $pass = 'appointments1!';
    public $mysqli;
    
    //would probably use a singleton for the DB connection in most cases
    public function __construct() {        
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        if ($this->mysqli->connect_error) {
            die('Error : ('. $this->mysqli->connect_errno .') '. $this->mysqli->connect_error);
        }
    }
    
    public function exec($sql)
    {
       return $this->mysqli->query($sql);
    }
    
}
