
	<div class="span12">
<!-- 
New Products
-->
	<div class="well well-small">
	<h3><?php echo $this->categoryitem[0]->name; ?></h3>
	<?php if (count($this->productlist)==0) {?>
		<div class="alert alert-danger">Product comming soon</div>
		
	<?php }else{  foreach ($this->chunkproduct as $cp) { ?>
		<div class="row-fluid">
		  <ul class="thumbnails">
		<?php foreach ($cp as $c) { ?>
			<li class="span4">
			  <div class="thumbnail">
				<a href="<?php echo base_url()?>front/product/<?php echo $c->slug; ?>-<?php echo $c->id; ?>.html" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url()?>front/product/<?php echo $c->slug; ?>-<?php echo $c->id; ?>.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url()?>front/product/<?php echo $c->slug; ?>-<?php echo $c->id; ?>.html"><img src="<?php echo base_url()?>admin/public/images/<?php echo $c->image1; ?>" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $c->name; ?></p>
					<p><strike>Rs. <?php echo $c->price; ?></strike> </p>
					<p><strong>Rs. <?php echo $c->price-$c->discount; ?></strong></p>
					<h4><a class="shopBtn" href="<?php echo base_url()?>public/#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="<?php echo base_url()?>public/#">Add to Wish List </a> 
						<a class="pull-left" href="<?php echo base_url()?>public/#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		<?php } ?>
			<!-- <li class="span4">
			  <div class="thumbnail">
				<a href="<?php echo base_url()?>public/product_details.html" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url()?>public/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url()?>public/product_details.html"><img src="<?php echo base_url()?>public/assets/img/b.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="<?php echo base_url()?>public/#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="<?php echo base_url()?>public/#">Add to Wish List </a> 
						<a class="pull-left" href="<?php echo base_url()?>public/#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="<?php echo base_url()?>public/product_details.html" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url()?>public/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url()?>public/product_details.html"><img src="<?php echo base_url()?>public/assets/img/c.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="<?php echo base_url()?>public/#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="<?php echo base_url()?>public/#">Add to Wish List </a> 
						<a class="pull-left" href="<?php echo base_url()?>public/#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li> -->
		  </ul>
		</div>
	<?php }} ?>
	
	
	</div>
	</div>
	</div>
<!-- 
Clients 
-->
