<style type="text/css">
	.form-group{
		border: none;
		border-color: none;
		
	}
	.form-control{
		background: inherit !important;
	}
</style>
<?php require APPROOT .'/view/include/header.php';?>
	 <section class="breadcrumb-section spad set-bg" data-setbg="../realestate/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Sign Up</h4>
                        <div class="bt-option">
                            <a href="<?php echo URLROOT;?>"><i class="fa fa-home"></i> Home</a>
                            <span>Become an Agent</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<div class="col-md-6 mx-auto" id="">
		<div class="card card-body bg-light mt-5" id="signup">
			<div class="signup" style="text-align: center;">
				<h2>Sign up</h2>
				<p><span class="fa fa-pencil"></span> Sign Up as an Agent</p><hr>
			</div>
			<form action = "<?php echo URLROOT;?>/users/agentsignup" method="POST" enctype = "multipart/form-data">
				<div class="form-group">
					<label for="sname">Surname: <sup>*</sup></label>
					<input type="text" name="sn" class="form-control form-control-lg <?php echo (!empty($data['sn_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['sn'];?>"><span class="invalid-feedback"><?php echo $data['sn_err'];?></span>
				</div>
				<div class="form-group">
					<label for="fname">Firstname: <sup>*</sup></label>
					<input type="text" name="fn" class="form-control form-control-lg <?php echo (!empty($data['fn_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['fn'];?>"><span class="invalid-feedback"><?php echo $data['fn_err'];?></span>
				</div>
				<div class="form-group">
					<label for="email">Email: <sup>*</sup></label>
					<input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'];?>"><span class="invalid-feedback"><?php echo $data['email_err'];?></span>
				</div>
				 <div class="form-group">
                    <label for="restaurantimg">Agent Photo: <sup>*</sup></label>
                    <input type="file" id="" required name="agent_img" class="form-control form-control-lg <?php echo (!empty($data['agent_img_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['agent_img'];?>"><span class="invalid-feedback"><?php echo $data['agent_img_err'];?></span>
                </div>
                <div class="form-group">
                    <label for="restaurantdesc">Agent Description: <sup>*</sup></label>
                    <textarea name="agent_desc" class="form-control form-control-lg">
                    	
                    </textarea>
                </div>
				<div class="form-group">
					<label for="password">Password: <sup>*</sup></label>
					<input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'];?>"><span class="invalid-feedback"><?php echo $data['password_err'];?></span>
				</div>
				<div class="form-group">
					<label for="confirm_password">Confirm_password: <sup>*</sup></label>
					<input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password'];?>"><span class="invalid-feedback"><?php echo $data['confirm_password_err'];?></span>
				</div>
				<div class="form-group">
					<label for="phonenumer">PhoneNumber: <sup>*</sup></label>
					<input type="text" name="phonenumber" class="form-control form-control-lg <?php echo (!empty($data['phonenumber_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phonenumber'];?>"><span class="invalid-feedback"><?php echo $data['phonenumber_err'];?></span>
				</div>
				
          		<div class="row">
					<div class="col">
						<input type = "submit" id="btnstyle" value = "Sign Up" class="btn btn-success btn-block" style="background: #103230; border: inherit;">
					</div>
					<div class="col">
						<a href="<?php echo URLROOT;?>/users/login" class = "btn btn-light btn-block">Login</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<hr style="background: #a31317;">
<?php require APPROOT .'/view/include/footer.php';?>