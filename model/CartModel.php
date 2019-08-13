<?php
class CartModel extends Model{
	protected $id,$customer_id,$product_id,$session_id,$quantity,$price,$color,$size;
	function saveCart(){
		$sql="insert into tbl_cart(product_id,session_id,quantity,price,color,size) values('$this->product_id','$this->session_id','$this->quantity','$this->price','$this->color','$this->size')";
		return $this->insert($sql);
	}
	function getCartDetails(){
		$sql="select * from tbl_cart where session_id='$this->session_id' and product_id='$this->product_id' and color='$this->color' and size='$this->size'";
		return $this->select($sql);
	}
	function getCartItemBySessionID(){
		$sql="select c.*,p.name,p.image1,p.slug,p.stock from tbl_cart c join tbl_product p on c.product_id=p.id where session_id='$this->session_id'";
		return $this->select($sql);
	}
	function updateCartQuantity(){
		$sql="update tbl_cart set quantity='$this->quantity' where id='$this->id'";
		return $this->update($sql);
	}

}
?>