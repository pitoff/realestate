<style type="text/css">
	.form-group{
		border: none;
		border-color: none;
		border-bottom: 1px solid #b4b4b4;
		
	}
	.form-control{
		background: inherit !important;
	}
	.regopacity{
		opacity: 0.9;
	}
</style>
<?php require APPROOT .'/view/include/header'. '.php';?>
	 <section class="breadcrumb-section spad set-bg" data-setbg="../realestate/img/hero/hero-2.jpg">
        <div class="container">
            <div class="row">
			<div class="col-md-6 mx-auto">
		<div class="card card-body bg-light mt-5 regopacity">			
			<div class="signup" style="text-align: center;">
			<div class="formSentMsg"><?php flash2('inactive');?></div>
			<div class="formSentMsg"><?php flash('register_ok');?></div>
				<h2>Login</h2>
				<p>login to your <?php echo SITENAME?> account</p><hr>
			</div>
			<form action = "<?php echo URLROOT;?>/users/login" method="POST">
				<div class="form-group">
					<label for="email">Email: <sup>*</sup></label>
					<input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'];?>"><span class="invalid-feedback"><?php echo $data['email_err'];?></span>
				</div>
				<div class="form-group">
					<label for="password">Password: <sup>*</sup></label>
					<input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'];?>"><span class="invalid-feedback"><?php echo $data['password_err'];?></span>
				</div>
				<div class="row">
					<div class="col">
						<input type = "submit" id="btnstyle" value = "Login" class="btn btn-success btn-block" style="background: #103230; border: inherit;">
					</div>
					<div class="col">
						<a href="<?php echo URLROOT;?>/users/regularsignup" class = "btn btn-light btn-block">Sign Up</a>
					</div>
				</div>
			</form>
		</div>
	</div>           	
            </div>
        </div>
    </section>
	<script type="text/javascript">
		
		$(".formSentMsg").delay(2500).fadeOut(300);
	</script>
<?php require APPROOT .'/view/include/footer'. '.php';?>