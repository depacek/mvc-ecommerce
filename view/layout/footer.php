<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="<?php echo base_url()?>public/products.html" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
		  	<?php foreach ($this->featureproduct as $fc) { ?>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url()?>front/product/<?php echo $fc->slug; ?>-<?php echo $fc->id; ?>.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="<?php echo base_url()?>front/product/<?php echo $fc->slug; ?>-<?php echo $fc->id; ?>.html"><img src="<?php echo base_url()?>admin/public/images/<?php echo $fc->image1; ?>" alt=""></a>
				<div class="caption">
				  <h5><?php echo $fc->name; ?></h5>
				  <h4>
					  <a class="defaultBtn" href="<?php echo base_url()?>front/product/<?php echo $fc->slug; ?>-<?php echo $fc->id; ?>.html" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">
					  	<strong>Rs.<?php echo $fc->price-$fc->discount; ?></strong>
					  </span>

				  </h4>
				</div>
			  </div>
			</li>
		<?php } ?>
		  </ul>	
	</div>
	</div>
	<hr>
	</div>
	</div>

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span4">
<h5>Your Account</h5>
<a href="<?php echo base_url()?>public/#">YOUR ACCOUNT</a><br>
<a href="<?php echo base_url()?>public/#">PERSONAL INFORMATION</a><br>
<a href="<?php echo base_url()?>public/#">ADDRESSES</a><br>
<a href="<?php echo base_url()?>public/#">DISCOUNT</a><br>
<a href="<?php echo base_url()?>public/#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="<?php echo base_url()?>public/contact.html">CONTACT</a><br>
<a href="<?php echo base_url()?>public/#">SITEMAP</a><br>
<a href="<?php echo base_url()?>public/#">LEGAL NOTICE</a><br>
<a href="<?php echo base_url()?>public/#">TERMS AND CONDITIONS</a><br>
<a href="<?php echo base_url()?>public/#">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="<?php echo base_url()?>public/#">NEW PRODUCTS</a> <br>
<a href="<?php echo base_url()?>public/#">TOP SELLERS</a><br>
<a href="<?php echo base_url()?>public/#">SPECIALS</a><br>
<a href="<?php echo base_url()?>public/#">MANUFACTURERS</a><br>
<a href="<?php echo base_url()?>public/#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
 Malorum" by Cicero are also reproduced in their exact original form, 
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>
</div><!-- /container-fluid -->

<div class="copyright">
<div class="container-fluid">
	<p class="pull-right">
		<a href="<?php echo base_url()?>public/#"><img src="<?php echo base_url()?>public/assets/img/maestro.png" alt="payment"></a>
		<a href="<?php echo base_url()?>public/#"><img src="<?php echo base_url()?>public/assets/img/mc.png" alt="payment"></a>
		<a href="<?php echo base_url()?>public/#"><img src="<?php echo base_url()?>public/assets/img/pp.png" alt="payment"></a>
		<a href="<?php echo base_url()?>public/#"><img src="<?php echo base_url()?>public/assets/img/visa.png" alt="payment"></a>
		<a href="<?php echo base_url()?>public/#"><img src="<?php echo base_url()?>public/assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>
</div>
</div>
<!-- <a href="<?php echo base_url()?>front/index/#" class="gotop"><i class="icon-double-angle-up"></i></a> -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>public/assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>public/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>public/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo base_url()?>public/assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="<?php echo base_url()?>public/assets/js/shop.js"></script>
  </body>
</html>