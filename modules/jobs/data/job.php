<?php

/**
 * Data object for Job
 */

class Job {
    private $id;
    private $userId;
    private $userName;
    private $email;
    private $jobName;

    public function __construct(){
    
    }
    

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return the $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
	/**
     * @return the $userName
     */
    public function getUserName()
    {
        return $this->userName;
    }
    
    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

	/**
     * @return the $jobName
     */
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    
	/**
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    
    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

	/**
     * @param string $jobName
     */
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;
    }
    
}