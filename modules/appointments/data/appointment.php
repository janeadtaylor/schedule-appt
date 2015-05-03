<?php

/**
 * Data object for Resume
 */

class Resume {
    private $id;
    private $job_id;
    private $user_id;
    private $name;
    private $file;

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
     * @return the $job_id
     */
    public function getJob_id()
    {
        return $this->job_id;
    }

	/**
     * @return the $user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

	/**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @return the $file
     */
    public function getFile()
    {
        return $this->file;
    }

	/**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	/**
     * @param int $job_id
     */
    public function setJob_id($job_id)
    {
        $this->job_id = $job_id;
    }

	/**
     * @param int $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

	/**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

}