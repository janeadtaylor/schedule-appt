       <form action="" method="post" enctype="multipart/form-data">
            <h2>Appointments Demo</h2>
            <h3>Login</h3>       
            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email: <input type="text" name="email" size="30"></div>
            <br />
            <div>Password: <input type="password" name="password" size="30"></div>
            <br />
			<div><input type="submit" value="" class="submit"></div>
			<br />
			<?php if(isset($_POST['email'])) { //display error message ?>
			<div>ERROR: Invalid login</div>
			<?php } ?>
        </form>
        <script src="public/js/jquery.js"></script>
        <script src="public/js/jquery.form.js"></script>