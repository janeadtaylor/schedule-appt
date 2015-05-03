<?php

/**
 * Data object for User
 */

class User {
    
    static $USER_TYPE_APPLICANT = 2;
    
    private $id;
    private $user_type_id;
    private $name;
    private $email;
    private $phone;
    
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
     * @return the $user_type_id
     */
    public function getUser_type_id()
    {
        return $this->user_type_id;
    }

	/**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

	/**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

	/**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	/**
     * @param int $user_type_id
     */
    public function setUser_type_id($user_type_id)
    {
        $this->user_type_id = $user_type_id;
    }

	/**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

	/**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}