<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="<?php echo base_url()?>public/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="<?php echo base_url()?>public/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="<?php echo base_url()?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="<?php echo base_url()?>public/css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="<?php echo base_url()?>public/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>public/assets/ico/favicon.ico">
    <style type="text/css">
    	.error{
    		color: red;
    	}
    </style>
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container-fluid-fluid">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="<?php echo base_url()?>public/#"><span class="icon-twitter"></span></a>
					<a href="<?php echo base_url()?>public/#"><span class="icon-facebook"></span></a>
					<a href="<?php echo base_url()?>public/#"><span class="icon-youtube"></span></a>
					<a href="<?php echo base_url()?>public/#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="<?php echo base_url()?>front/index"> <span class="icon-home"></span> Home</a> 
				<a href="<?php echo base_url()?>customer/login"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url()?>customer/register"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url()?>public/contact.html"><span class="icon-envelope"></span> Contact us</a>
				<?php
				 $total=0;
				 foreach($this->cartitem as $c) {
					$total+=$c->price*$c->quantity;
				} ?>
				<a href="<?php echo base_url()?>cart/index"><span class="icon-shopping-cart"></span><?php echo count($this->cartitem); ?> Item(s) - <span class="badge badge-warning"> Rs. <?php echo $total; ?></span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container-fluid">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span6">
	<h1>
	<a class="logo" href="<?php echo base_url()?>public/index.html"><span>Twitter Bootstrap ecommerce template</span> 
		<img src="<?php echo base_url()?>public/assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span5">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
	Twitter Bootstrap shopping cart HTML template is available @ $14
	</h1>
	</div>
	</div>
	<div class="span5 alignR">
	<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini"><a href="<?php echo base_url()?>cart/index">[ <?php echo count($this->cartitem); ?> ] <span class="icon-shopping-cart"></span></a></span>
	<span class="btn btn-warning btn-mini">Currency : Rs.</span>
	<!-- <span class="btn btn-mini"></span>
	<span class="btn btn-mini">&euro;</span> -->
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container-fluid">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
				<?php if (!isset($this->categoryitem[0]->slug)) {
        		$c='active';
        	}else{
        		$c='';
        	} ?>
			  <li class="<?php echo $c; ?>"><a href="<?php echo base_url()?>front/index">Home	</a></li>
			  <?php foreach ($this->menuitem as $menu) {
			  	if(isset($this->categoryitem[0]->slug) && $this->categoryitem[0]->slug==$menu->slug ){
			  		$c='active';
			  	}else{
			  		$c='';
			  	}?>
			  <li class="<?php echo $c; ?>"><a href="<?php echo base_url()?>front/category/<?php echo  $menu->slug; ?>"><?php echo $menu->name;  ?></a></li>
			<?php }?>
			 

			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<?php
				if (isset($_SESSION['customer_username']) && !empty($_SESSION['customer_username'])) {
					echo "welcome , ".$_SESSION['customer_username'];
				}else{?>
				<a  href="<?php echo base_url()?>customer/login"><span class="icon-lock"></span> Login </a>
			<?php } ?>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>

<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span4">
<div class="well well-small">
	<ul class="nav nav-list">
	<?php foreach ($this->navitem as $nav) { ?>
		<li><a href="<?php echo base_url()?>front/category/<?php echo  $nav->slug; ?>"><span class="icon-chevron-right"></span><?php echo $nav->name; ?></a></li>
	<?php }?>
		
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="<?php echo base_url()?>front/index">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="<?php echo base_url()?>public/#"><img src="<?php echo base_url()?>public/assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			
			<ul class="nav nav-list promowrapper">
			
			
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url()?>front/product/<?php echo $this->featureproduct[0]->slug; ?>-<?php echo $this->featureproduct[0]->id; ?>.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url()?>admin/public/images/<?php echo $this->featureproduct[0]->image1; ?>" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="<?php echo base_url()?>front/product/<?php echo $this->featureproduct[0]->slug; ?>-<?php echo $this->featureproduct[0]->id; ?>.html">VIEW</a> <span class="pull-right">Rs.<?php echo $this->featureproduct[0]->price-$this->featureproduct[0]->discount; ?></span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			
		  </ul>

	</div>