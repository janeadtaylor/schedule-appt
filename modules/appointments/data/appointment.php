<?php

/**
 * Data object for Appointment
 */

class Appointment {
    private $id;
    private $user_id_seeker;
    private $user_id_manager;
    private $date;

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
     * @return the $user_id_seeker
     */
    public function getUser_id_seeker()
    {
        return $this->user_id_seeker;
    }

	/**
     * @return the $user_id_manager
     */
    public function getUser_id_manager()
    {
        return $this->user_id_manager;
    }

	/**
     * @return the $date
     */
    public function getDate()
    {
        return $this->date;
    }

	/**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	/**
     * @param field_type $user_id_seeker
     */
    public function setUser_id_seeker($user_id_seeker)
    {
        $this->user_id_seeker = $user_id_seeker;
    }

	/**
     * @param field_type $user_id_manager
     */
    public function setUser_id_manager($user_id_manager)
    {
        $this->user_id_manager = $user_id_manager;
    }

	/**
     * @param field_type $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    
    

}