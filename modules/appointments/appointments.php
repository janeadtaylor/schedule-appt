<?php
require_once '../../core/db.php';
require_once '../../core/functions.php';
require_once '../../modules/appointments/data/appointment.php';
require_once '../../modules/users/model/users.php';
require_once '../../modules/users/data/user.php';
require_once 'model/appointments.php';

/* NOTE
 This is not ideal for organizing business logic but it's a quick way 
 to solve the problem without routers/controllers using a direct AJAX call
*/

//santize the post data
$postData = sanitize($_POST);

//create new Appointment using form data
$appointment = new Appointment();
$appointment->setUser_id_seeker($postData['seeker']);
$appointment->setUser_id_manager($postData['manager']);
$appointment->setDate($postData['datetimepicker']);

//insert new appointment into the database
$appointmentsDb = new Appointments();
$appointmentsDb->insert($appointment);


?>