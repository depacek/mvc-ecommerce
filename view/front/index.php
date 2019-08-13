
	<div class="span12">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
            	<?php $i=0;foreach ($this->sliderproduct as $slider) { ?>
			  <div class="item <?php if($i==0){echo 'active';} ?>">
			  	<a href="<?php echo base_url()?>front/product/<?php echo $this->newproduct[$i]->slug; ?>-<?php echo $this->newproduct[$i]->id; ?>.html">
                <img style="width:100%" src="<?php echo base_url()?>admin/public/images/<?php echo $slider->image1; ?>" alt="bootstrap ecommerce templates"></a>
                <div class="carousel-caption">
                      <h4><?php echo $slider->name; ?></h4>
                      <p><span><?php echo $slider->short_description; ?></span></p>
                </div>
              </div>
          <?php $i++;} ?>
			 
            </div>
            <a class="left carousel-control" href="<?php echo base_url()?>public/#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="<?php echo base_url()?>public/#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->
	<div class="well well-small">
	<h3>New Products </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">
			  	<?php for ($i=0; $i <4 ; $i++) {?>
				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>front/product/<?php echo $this->newproduct[$i]->slug; ?>-<?php echo $this->newproduct[$i]->id; ?>.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="<?php echo base_url()?>front/product/<?php echo $this->newproduct[$i]->slug; ?>-<?php echo $this->newproduct[$i]->id; ?>.html" class="tag"></a>
					<a href="<?php echo base_url()?>front/product/<?php echo $this->newproduct[$i]->slug; ?>-<?php echo $this->newproduct[$i]->id; ?>.html"><img src="<?php echo base_url()?>admin/public/images/<?php echo $this->newproduct[$i]->image1; ?>" alt="bootstrap-ring"></a>
				</div>
				</li>
			<?php }?>
				<!-- <li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>public/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="<?php echo base_url()?>public/#" class="tag"></a>
					<a  href="<?php echo base_url()?>public/product_details.html"><img src="<?php echo base_url()?>public/assets/img/i.jpg" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>public/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="<?php echo base_url()?>public/#" class="tag"></a>
					<a  href="<?php echo base_url()?>public/product_details.html"><img src="<?php echo base_url()?>public/assets/img/g.jpg" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>public/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a  href="<?php echo base_url()?>public/product_details.html"><img src="<?php echo base_url()?>public/assets/img/s.png" alt=""></a>
				  </div>
				</li> -->
			  </ul>
			  </div>
		   <div class="item">
		  <ul class="thumbnails">
		  	<?php for ($i=4; $i < 8; $i++) { ?>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url()?>front/product/<?php echo $this->newproduct[$i]->slug; ?>-<?php echo $this->newproduct[$i]->id; ?>.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="<?php echo base_url()?>public/product_details.html"><img src="<?php echo base_url()?>admin/public/images/<?php echo $this->newproduct[$i]->image1; ?>" alt=""></a>
			  </div>
			</li>
		<?php }?> 
			
		  </ul>
		  </div>
		   </div>
		  <a class="left carousel-control" href="<?php echo base_url()?>public/#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="<?php echo base_url()?>public/#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>
		<div class="row-fluid">
		  <ul class="thumbnails">
		  	<?php for ($i=8; $i < 11; $i++) { ?>
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="<?php echo base_url()?>front/product/<?php echo $this->newproduct[$i]->slug; ?>-<?php echo $this->newproduct[$i]->id; ?>.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url()?>front/product/<?php echo $this->newproduct[$i]->slug; ?>-<?php echo $this->newproduct[$i]->id; ?>.html"><img src="<?php echo base_url()?>admin/public/images/<?php echo $this->newproduct[$i]->image1; ?>" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $this->newproduct[$i]->name; ?></p>
					<p><strike>Rs.<?php echo $this->newproduct[$i]->price; ?></strike></p>
					<p><strong>Rs.<?php echo $this->newproduct[$i]->price-$this->newproduct[$i]->discount; ?></strong></p>
					<h4><a class="shopBtn" href="<?php echo base_url()?>public/#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="<?php echo base_url()?>public/#">Add to Wish List </a> 
						<a class="pull-left" href="<?php echo base_url()?>public/#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		<?php }?>
		  </ul>
		</div>
	</div>
	
