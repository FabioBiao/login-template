<?php 
	include '../header.php';
?>
	<body>
		<div class="container">

			<form class="form-signin" name="form1" method="post" action="checklogin.php">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
				<input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
				<!-- The checkbox remember me is not implemented yet...
				<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
				</label>
				-->
				<button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				<a href="register.php" name="Sign Up" id="signup" class="btn btn-lg btn-primary btn-block" type="submit">Create new account</a>

				<div id="message"></div>
			</form>

		</div> <!-- /container -->

		<!-- The AJAX login script -->
		<script src="../js/login.js"></script>
	</body>
<?php 
	include '../footer.php';
?>
