<?php

/**
 * Data object for User
 */

class User {
    
    static $USER_TYPE_MANAGER = 1;
    static $USER_TYPE_SEEKER = 2;
    
    private $id;
    private $user_type_id;
    private $name;
    private $email;
    private $password;
    
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
     * @return the $password
     */
    public function getPassword()
    {
        return $this->password;
    }

	/**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	/**
     * @param field_type $user_type_id
     */
    public function setUser_type_id($user_type_id)
    {
        $this->user_type_id = $user_type_id;
    }

	/**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

	/**
     * @param field_type $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    

}