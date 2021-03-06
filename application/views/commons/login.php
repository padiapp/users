<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('commons/loginheader');?>
	<body>
		<div class="container-fluid-full">
			<div class="row-fluid">
				<div class="row-fluid">
					<div class="login-box">
						<div class="icons">
							<a href="index.html"><i class="halflings-icon home"></i></a>
							<a href="#"><i class="halflings-icon cog"></i></a>
						</div>
						<h2>Login PadiApp</h2>
						<form class="form-horizontal" action="/authentication/login" method="post">
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="email"/>
							</div>
							<div class="clearfix"></div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="password"/>
							</div>
							<div class="clearfix"></div>
							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
						</form>
						<hr>
						<p>
							Silakan, <a href="/authentication/resetpassword">klik sini</a> jika lupa password.
						</p>	
					</div><!--/span-->
				</div><!--/row-->
			</div><!--/.fluid-container-->
		</div><!--/fluid-row-->
		<!-- start: JavaScript-->
		<?php $this->load->view('commons/js');?>
		<!-- end: JavaScript-->	
	</body>
</html>
