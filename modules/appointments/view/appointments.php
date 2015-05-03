           <form action="modules/appointments/appointments.php" method="post" enctype="multipart/form-data">
                <h3>Add Appointment</h3>
                <div>Please select which job you are applying for:</div>
                <select name="jobId" id="jobId">
                  <?php
                      $jobsDB = new Jobs();
                      $allJobs = $jobsDB->getAll();
                  
                      foreach($allJobs as $job) { ?>
                        <option value="<?php echo $job->getId() ?>"><?php echo $job->getUserName() . ' - ' . $job->getJobName(); ?></option>
                  <?php } ?>
                </select> 
                <br /><br />
                <div>Name: <input type="text" name="name" size="35"></div>
                <div>Email: <input type="text" name="email" size="35"></div>
                <div>Phone: <input type="text" name="phone"  maxlength="12" size="12" value="___-___-____" onfocus="clearInputText(this);"></div>
                <br />
    			<div>Resume Title: <input type="text" name="title" size="23"></div>
    			<div>Select File: <input type="file" name="myfile"></div>
    			<br />
    			<div><input type="submit" value=""></div>
    
    			<br />
                <div class="progress">
    	            <div class="bar"></div >
    	            <div class="percent">0%</div >      
    	            <div id="status"></div>         
           		</div>
           		<br />  
            </form>
            <script src="public/js/jquery.js"></script>
            <script src="public/js/jquery.form.js"></script>
            <script src="public/js/uploadProgress.js"></script>
            <script src="public/js/functions.js"></script>