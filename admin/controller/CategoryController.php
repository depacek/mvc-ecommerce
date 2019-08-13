<?php
class CategoryController extends Controller{
	function __construct(){
		session_start();
		$this->category=$this->loadModel('category');
	}
	function create(){
		// print_r($_POST);
		if (isset($_POST['btnCreate'])) {
			// print_r($_POST);
			$err=[];
			if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']) !='') {
				$this->category->set('name',$_POST['name']);
			}else{
				$err['name']='Enter name';
			}

			if (isset($_POST['rank']) && !empty($_POST['rank']) && trim($_POST['rank']) !='') {
				$this->category->set('rank',$_POST['rank']);
			}else{
				$err['rank']='Enter rank';
			}
			$this->category->set('role',$_POST['role']);
			$this->category->set('parent_id',$_POST['parent_id']);
			$this->category->set('status',$_POST['status']);
			$this->category->set('slug',$_POST['slug']);
			$this->category->set('created_by',$_SESSION['admin_username']);
			$this->category->set('created_date',date('Y-m-d H:i:s'));
			if (count($err)==0) {
			$id=$this->category->createCategory();
			if ($id) {
				$err['sucess_messsage']="Category Created with Id $id";
			}else{
				$err['error_messsage']="Category not Created";
			}
			}
			
			$this->error=$err;
		}
		
		$this->title='Create Category';
		$this->parentcategory=$this->category->getAllParentCategory();
		$this->loadView('category/create');

	}

	function index()
	{
		$this->categorydata=$this->category->getAllCategory();
		// print_r($this->categorydata);
		$this->title='list Category';
		$this->loadView('category/index');
		
	}
	function delete($id)
	{
			$this->category->set('id',$id);
			$this->category->deleteCategoryByID();
			$this->categorydata=$this->category->getAllCategory();
		// print_r($this->categorydata);
		$this->title='list Category';
		$this->loadView('category/list');
	}

	function edit($id)
	{
			$this->category->set('id',$id);
			if (isset($_POST['btnUpdate'])) {
			// print_r($_POST);
			$err=[];
			if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']) !='') {
				$this->category->set('name',$_POST['name']);
			}else{
				$err['name']='Enter name';
			}

			if (isset($_POST['rank']) && !empty($_POST['rank']) && trim($_POST['rank']) !='') {
				$this->category->set('rank',$_POST['rank']);
			}else{
				$err['rank']='Enter rank';
			}
			$this->category->set('role',$_POST['role']);
			$this->category->set('parent_id',$_POST['parent_id']);
			$this->category->set('status',$_POST['status']);
			$this->category->set('slug',$_POST['slug']);
			$this->category->set('updated_by',$_SESSION['admin_username']);
			$this->category->set('updated_date',date('Y-m-d H:i:s'));
			if (count($err)==0) {
			$test=$this->category->editCategory();
			if ($test) {
				$err['sucess_messsage']="Category Updated";
			}else{
				$err['error_messsage']="Category Update Failed";
			}
			}
			
			$this->error=$err;
		}
			$this->categorydata=$this->category->getCategoryByID();
			$this->title='Update Category';
			$this->parentcategory=$this->category->getAllParentCategory();
			$this->loadView('category/edit');
	}
	function getsubcategory (){
		// print_r($_POST);
				$this->category->set('parent_id',$_POST['category_id']);
				$data=$this->category->getSubCategoryByParentID();
				// print_r($data);
				$html="<option value=''>Select SubCategory</option>";
				foreach ($data as $d) {
				$html.="<option value='$d->id'>$d->name</option>";
				}
				echo $html;
	}

}
?>