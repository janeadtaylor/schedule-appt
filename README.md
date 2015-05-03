# schedule-appt

This is a simple schedule appointment application. The form uses AJAX to submit the form. Note, for mail to work sendmail must be enabled on the server. If email is not working, check to make sure the call to the emailFile() method in modules/schedule-appt/appointments.php is uncommented. 

There is a db.sql file that contains a SQL script to create the required database.  The config values in the core/db.php file will need to be updated for the given environment.

The code is split out into data objects and models for database integration. Typically I would create a front controller and controllers for each module then route to the appropriate controller based on the URI values but for time's sake, I've kept it simple and have all of the logic combined in the modules/schedule-appt/appointments.php file. Also, I would typically separate out the view content from the business logic, but since there's really only one view I just put it in the main index.php file. 


