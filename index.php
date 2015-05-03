<?php
//loading necessary files (would usually handle this with bootstrap autoloading and utilizing front controller pattern)
require_once 'core/db.php';
require_once 'modules/appointments/model/appointments.php';
require_once 'modules/appointments/data/appointment.php';
require_once 'modules/users/model/users.php';
require_once 'modules/users/data/user.php';

//start session
session_start();

// if posted check for login details in database
if(isset($_POST['email'])) {
    if(isset($_POST['password'])) {
        //check login and set user data
        $UsersDB = new Users();
        $user = $UsersDB->getByEmailAndPassword($_POST['email'], $_POST['password']);
        $_SESSION['user'] = serialize($user);
    } 
    
    $user = unserialize($_SESSION['user']);
    
    //if login valid then set session user id to logged in user id   
    if(!empty($user->getId())) {
        $_SESSION['user_id'] = $user->getId();
    }
} else {
    //logout on load index (for testing)
    unset($_SESSION['user']);
    unset($_SESSION['user_id']);
}

//load header content
require_once 'core/header.php';

//check if logged in
if(!isset($_SESSION['user_id']) && !isset($_GET['user_id'])) { 
    //display login view if not logged in
    require_once 'modules/users/view/login.php';
} else {     
    if(isset($_POST['add'])) {
        //display add appointment view
        require_once 'modules/appointments/view/appointments.php';
    } else { 
        //display user home page view
        require_once 'modules/users/view/home.php';
    }
}

//load footer content
require_once 'core/footer.php';
