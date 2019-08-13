
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>
	<?php if (isset($_SESSION['sucess_messsage'])&&!empty($_SESSION['sucess_messsage'])) {?>
            <div class="alert alert-success"><?php echo $_SESSION['sucess_messsage']; $_SESSION['sucess_messsage']=''; ?></div>
          <?php }else if (isset($_SESSION['error_messsage'])&&!empty($_SESSION['error_messsage'])) {?>
            <div class="alert alert-danger"><?php echo $_SESSION['error_messsage']; $_SESSION['error_messsage']=''; ?></div>
         <?php } ?>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span5">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/><br/>
			If you are a new user you can sign up to create a new account in our site.<br/><br/><br/>
			Click below to create your account<br/><br/><br/>
			<!-- Enter email to create a new account<br/>
			<form>
			  <div class="control-group">
				<label class="control-label" for="inputEmail">E-mail address</label>
				<div class="controls">
				  <input class="span3"  type="text" placeholder="Email">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form> -->
			  <a href="<?php echo base_url(); ?>customer/register"><button class="btn block">Create Your Account</button></a>

		</div>
		</div>
		<div class="span1"> </div>
		<div class="span7">
			<div class="well">
			<h5>ALREADY REGISTERED ? LOGIN</h5>
			<?php if (isset($this->error['login'])) {?>
               <br> <div class="alert alert-danger"><?php echo $this->error['login'];?></div>
                <?php } ?>
			<form action="" method="post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				  <input class="span6"  type="email" name="email" placeholder="Email">
				  <?php if (isset($this->error['email'])) {?>
				  	<br>
                     <span class="error"><?php echo $this->error['email'];?></span>
                    <?php } ?>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				  <input type="password" class="span6" name="password" placeholder="Password">
				  <?php if (isset($this->error['password'])) {?>
                    <br> <span class="error"><?php echo $this->error['password'];?></span>
                    <?php } ?>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
					<input type="submit" name="BtnLogin" class="defaultBtn" value="Login">
				   <a href="#">Forget password ?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div>