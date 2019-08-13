<div class="span12">
	<ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
	</ul>
	<h3> Registration</h3>
	<hr class="soft"/>
	<div class="well">
		<?php if (isset($_SESSION['sucess_messsage'])&&!empty($_SESSION['sucess_messsage'])) {?>
            <div class="alert alert-success"><?php echo $_SESSION['sucess_messsage']; $_SESSION['sucess_messsage']=''; ?></div>
          <?php }else if (isset($_SESSION['error_messsage'])&&!empty($_SESSION['error_messsage'])) {?>
            <div class="alert alert-danger"><?php echo $_SESSION['error_messsage']; $_SESSION['error_messsage']=''; ?></div>
         <?php } ?>
		<form class="form-horizontal" action="" method="post">
			<h3>Your Personal Details</h3>
			<div class="control-group">
				<label class="control-label" for="inputFname">Name <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="inputFname" name="name" placeholder="Name">
					<?php if (isset($this->error['name'])) {?>
                     <span class="error"><?php echo $this->error['name'];?></span>
                    <?php } ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFusername">Username <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="inputFusername" name="username" placeholder="Username">
					<?php if (isset($this->error['username'])) {?>
                     <span class="error"><?php echo $this->error['username'];?></span>
                    <?php } ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
				<div class="controls">
					<input type="email" name="email" placeholder="Email">
					<?php if (isset($this->error['email'])) {?>
                     <span class="error"><?php echo $this->error['email'];?></span>
                    <?php } ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password <sup>*</sup></label>
				<div class="controls">
					<input type="password" placeholder="Password" name="password">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Phone <sup>*</sup></label>
				<div class="controls">
					<input type="number" placeholder="Phone" name="phone">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="address">Address <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="address" name="address" placeholder="Address">
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<input type="submit" name="BtnReg" value="Register" class="exclusive shopBtn">
				</div>
			</div>
		</form>
	</div>
	

</div>
</div>