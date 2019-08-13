<?php
class ProductModel extends Model{
	protected $id,$category_id,$subcategory_id,$name,$slug,$price,$discount,$quantity,$stock,$status,$short_description,$description,$image1,$image2,$image3,$image4,$size,$color,$feature_key,$discount_key,$slider_key,$view_count,$created_by,$created_date,$updated_by,$updated_date;
	function createProduct(){
		$sql="insert into tbl_product(category_id,subcategory_id,name,slug,price,discount,quantity,stock,status,short_description,description,image1,image2,image3,image4,size,color,feature_key,discount_key,slider_key,view_count,created_by,created_date) values('$this->category_id','$this->subcategory_id','$this->name','$this->slug','$this->price','$this->discount','$this->quantity','$this->stock','$this->status','$this->short_description','$this->description','$this->image1','$this->image2','$this->image3','$this->image4','$this->size','$this->color','$this->feature_key','$this->discount_key','$this->slider_key','$this->view_count','$this->created_by','$this->created_date')";
		return $this->insert($sql);
	}
	function getAllproduct()
	{
		$sql="select * from tbl_product order by created_date  desc";
		return $this->select($sql);
	}
	function deleteCategoryByID(){
		$sql="delete from tbl_product where id='$this->id'";
		return $this->delete($sql);
	}
	function getCategoryByID(){
		$sql="select * from tbl_product where id='$this->id'";
		return $this->select($sql);
	}
	function editCategory(){
		$sql="update tbl_product set name='$this->name',role='$this->role',parent_id='$this->parent_id',rank='$this->rank',status='$this->status',slug='$this->slug',updated_by='$this->updated_by',updated_date='$this->updated_date' where id='$this->id'";
		return $this->update($sql);
	}
	function getAllParentCategory(){
		$sql="select id,name from tbl_product where role='category'";
		return $this->select($sql);
	}
	function getSliderProduct(){
		$sql="select id,name,slug,image1,short_description from tbl_product where slider_key=1 and status=1 order by created_date desc limit 5";
		return $this->select($sql);
	}
	function getNewProduct(){
		$sql="select id,name,slug,price,image1,short_description,discount from tbl_product where status=1 order by created_date desc limit 11";
		return $this->select($sql);
	}
	function getFeatureProduct(){
		$sql="select id,name,slug,price,image1,short_description,discount from tbl_product where feature_key=1 and status=1 order by created_date desc limit 3";
		return $this->select($sql);
	}
	function getProductByCategoryID(){
		$sql="select id,name,slug,image1,price,discount from tbl_product where category_id='$this->category_id' order by created_date desc";
		return $this->select($sql);
	}
	function getProductByID(){
		$sql="select * from tbl_product where id='$this->id'";
		return $this->select($sql);
	}

}
?>