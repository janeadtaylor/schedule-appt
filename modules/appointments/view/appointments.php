           <form id="save" action="modules/appointments/appointments.php" method="post" enctype="multipart/form-data">
                <h3>Create Appointment</h3>
                <div>Hello <?php echo $user->getName() ?>, please select a case manager:</div>
                <br />
                <select name="manager" id="manager">
                  <?php
                      $usersDB = new Users();
                      $allManagers = $usersDB->getAllManagers();
                  
                      foreach($allManagers as $manager) { ?>
                        <option value="<?php echo $manager->getId() ?>"><?php echo $manager->getName() ?></option>
                  <?php  } ?>
                </select> 
                <br /><br />
                <div>Please select a date and time:</div>
                <br />
                <input type="text" id="datetimepicker" name="datetimepicker">
                <input type="hidden" name="seeker" value="<?php echo $user->getId() ?>">
                <br /><br />
    			<div><input type="submit" name="create" value="" class="submit left"></div>  
    			<br /><br />
                <div class="progress">
    	            <div class="bar"></div >
    	            <div class="percent">0%</div >      
    	            <div id="status"></div>         
           		</div>
           		<br />
           		<a href='index.php?user_id=<?php echo $user->getId();?>'>View Appointments<a/>
            </form>
            <script src="public/js/jquery.js"></script>
            <script src="public/js/jquery.form.js"></script>
            <script src="public/js/saveProgress.js"></script>
            <script src="public/js/jquery.datetimepicker.js"></script>
            <script>
                $(function() {
                    $("#datetimepicker").datetimepicker();
                });
            </script>