            <form action="" method="post" enctype="multipart/form-data">       
                <?php //@todo: get appointments based on user type and list below ?>
                <div>list upcoming appointments here</div>
                <br />
                <input type="hidden" name="email" value="<?php $user = unserialize($_SESSION['user']); echo $user->getEmail(); ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="hidden" name="user" value="<?php echo serialize($_SESSION['user']); ?>">
            	<div><input type="submit" name="add" value="Create New Appointment"></div>
            </form>