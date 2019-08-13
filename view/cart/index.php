<!-- 
Body Section 
-->
	<div class="row">

	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url()?>front/index">Home</a> <span class="divider">/</span></li>
		<li class="active">Cart List</li>
    </ul>
	<div class="well well-small">
		<h1>Cart List <small class="pull-right"><?php echo count($this->cartitem); ?> Items are in the cart </small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Unit price</th>
                  <th>Qty </th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
              	<?php $total=0; foreach ($this->cartitem as $ci) {
              	 $total+=$ci->quantity*$ci->price; ?>
                <tr>
                  <td><img width="100" src="<?php echo base_url(); ?>admin/public/images/<?php echo $ci->image1; ?>" alt=""></td>
                  <td><strong>Item  :</strong> <?php echo $ci->name; ?> <br><strong>Color  :</strong><?php echo $ci->color; ?> <br><strong>Size  :</strong><?php echo $ci->size; ?> </td>
                  <td>Rs. <?php echo $ci->price; ?></td>
                  <td>
                  	<?php echo $ci->quantity; ?>
                  	<br/>
                  		<button class="btn btn-mini btn-danger">update</button>
                  </td>
                  <td>Rs. <?php echo $ci->price*$ci->quantity; ?></td>
                </tr>
            <?php } ?>
				<!-- <tr>
                  <td><img width="100" src="<?php echo base_url; ?>public/assets/img/f.jpg" alt=""></td>
                  <td>Item names and brief details<br>Carate:24 <br>Model:HBK24</td>
                  <td> - </td>
                  <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                  <td>$348.42</td>
                  <td>
				  <input class="span1" style="max-width:34px" placeholder="1" size="16" type="text">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button">+</button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				  </td>
                  <td>$348.42</td>
                </tr> -->
                <tr>
                  <td colspan="4" class="alignR">Total products:	</td>
                  <td> <span class="label label-primary">Rs.<?php echo $total; ?></span></td>
                </tr>
				</tbody>
            </table><br/>
		
		
    
					
	<a href="<?php echo base_url()?>front/index" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<a href="<?php echo base_url()?>cart/checkout" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

</div>
</div>
</div>
