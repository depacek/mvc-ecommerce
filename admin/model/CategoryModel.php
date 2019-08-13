<?php
class CategoryModel extends Model{
	protected $id,$name,$role,$parent_id,$rank,$slug,$status,$created_by,$created_date,$updated_by,$updated_date;
	function createCategory(){
		$sql="insert into tbl_category(name,role,parent_id,rank,status,slug,created_by,created_date) values('$this->name','$this->role','$this->parent_id','$this->rank','$this->status','$this->slug','$this->created_by','$this->created_date')";
		return $this->insert($sql);
	}
	function getAllCategory()
	{
		$sql="select * from tbl_category order by created_date  desc";
		return $this->select($sql);
	}
	function deleteCategoryByID(){
		$sql="delete from tbl_category where id='$this->id'";
		return $this->delete($sql);
	}
	function getCategoryByID(){
		$sql="select * from tbl_category where id='$this->id'";
		return $this->select($sql);
	}
	function editCategory(){
		$sql="update tbl_category set name='$this->name',role='$this->role',parent_id='$this->parent_id',rank='$this->rank',status='$this->status',slug='$this->slug',updated_by='$this->updated_by',updated_date='$this->updated_date' where id='$this->id'";
		return $this->update($sql);
	}
	function getAllParentCategory(){
		$sql="select id,name from tbl_category where role='category'";
		return $this->select($sql);
	}
	function getChildCategory(){
		$sql="select id,name from tbl_category where role='subcategory'";
		return $this->select($sql);
	}
	function getSubCategoryByParentID(){
		$sql="select id,name from tbl_category where role='subcategory' and parent_id='$this->parent_id'";
		return $this->select($sql);
	}
	function getMenuItem(){
		$sql="select id,name,slug from tbl_category where role='category' and status=1 order by rank limit 5";
		return $this->select($sql);
	}
	function getNavItem(){
		$sql="select id,name,slug from tbl_category where role='category' and status=1 order by rank";
		return $this->select($sql);
	}
	function getCategoryBySlug(){
		$sql="select * from tbl_category where slug='$this->slug' and status=1 order by rank";
		return $this->select($sql);
	}

}
?>