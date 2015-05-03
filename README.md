# schedule-appt

This is a simple schedule appointment application. The form uses AJAX to submit the new appointment data. 

There is a db.sql file that contains a SQL script to create the required database.  The config values in the core/db.php file will need to be updated for the given environment.

The code is split out into data objects and models for database integration. Typically I would create a front controller and controllers for each module then route to the appropriate controller based on the URI values but for time's sake, I've kept it simple. 

