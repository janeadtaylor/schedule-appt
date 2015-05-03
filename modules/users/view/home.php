            <form action="" method="post" enctype="multipart/form-data">
            <h3>Upcoming Appointments</h3>
                <?php 
                    if(isset($_GET['user_id'])) {
                        $usersDb = new Users();
                        $user = $usersDb->getById($_GET['user_id']);
                        $_SESSION['user'] = serialize($user);
                        $_SESSION['user_id'] = $user->getId();
                    }

                    $appointmentsDb = new Appointments();
                    
                    //check user type and get appointments based on user type
                    if($user->getUser_type_id() == 1) {
                        $appointmentData = $appointmentsDb->getAllManagerAppointmentsByUserId($user->getId());
                    } else if($user->getUser_type_id() == 2) {
                        $appointmentData = $appointmentsDb->getAllSeekerAppointmentsByUserId($user->getId());
                    }

                    foreach($appointmentData['appointments'] as $appointment) { ?>     
                        <div><?php echo $appointment['appointment']->getDate(); ?></div>
                        <div><?php echo $appointment["user"]->getName() . ' - ' . $appointment["user"]->getEmail(); ?></div>
                        <hr />
                        
                    <?php }
                        if($user->getUser_type_id() == 2) { ?>
                            <br />
                            <input type="hidden" name="email" value="<?php $user = unserialize($_SESSION['user']); echo $user->getEmail(); ?>">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <input type="hidden" name="user" value="<?php echo serialize($_SESSION['user']); ?>">
                        	<div><input type="submit" name="add" value="Create New Appointment"></div>
            	   <?php } ?>
            </form>