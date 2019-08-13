<?php
class ProductController extends Controller{
	function __construct(){
		session_start();
		$this->category=$this->loadModel('category');
		$this->product=$this->loadModel('product');
	}

	function create(){
		print_r($_POST);
		if (isset($_POST['btnCreate'])) {
			// print_r($_FILES);
			$err=[];
			if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']) !='') {
				$this->product->set('name',$_POST['name']);
			}else{
				$err['name']='Enter name';
			}

			if (isset($_POST['price']) && !empty($_POST['price']) && trim($_POST['price']) !='') {
				$this->product->set('price',$_POST['price']);
			}else{
				$err['price']='Enter price';
			}
			$this->product->set('discount',$_POST['discount']);
			$this->product->set('category_id',$_POST['category_id']);
			$this->product->set('subcategory_id',$_POST['subcategory_id']);
			$this->product->set('slug',$_POST['slug']);
			$this->product->set('quantity',$_POST['quantity']);
			$this->product->set('stock',$_POST['quantity']);
			$this->product->set('status',$_POST['status']);
			$this->product->set('short_description',$_POST['short_description']);
			$this->product->set('description',$_POST['description']);
			$this->product->set('size',$_POST['size']);
			$this->product->set('color',$_POST['color']);
			$this->product->set('feature_key',$_POST['feature_key']);
			$this->product->set('discount_key',$_POST['discount_key']);
			$this->product->set('slider_key',$_POST['slider_key']);
			// $this->product->set('discount_key',$_POST['discount_key']);
			$this->product->set('created_by',$_SESSION['admin_username']);
			$this->product->set('created_date',date('Y-m-d H:i:s'));
			if (isset($_FILES['image1']['name']) && !empty($_FILES['image1']['name'])) {
				move_uploaded_file($_FILES['image1']['tmp_name'],'public/images/'.$_FILES['image1']['name']);
                $this->product->set('image1',$_FILES['image1']['name']);                 

			}
			if (isset($_FILES['image2']['name']) && !empty($_FILES['image2']['name'])) {
				move_uploaded_file($_FILES['image2']['tmp_name'],'public/images/'.$_FILES['image2']['name']);
                $this->product->set('image2',$_FILES['image2']['name']);                 

			}
			if (isset($_FILES['image3']['name']) && !empty($_FILES['image3']['name'])) {
				move_uploaded_file($_FILES['image3']['tmp_name'],'public/images/'.$_FILES['image3']['name']);
                $this->product->set('image3',$_FILES['image3']['name']);                 

			}
			if (isset($_FILES['image4']['name']) && !empty($_FILES['image4']['name'])) {
				move_uploaded_file($_FILES['image4']['tmp_name'],'public/images/'.$_FILES['image4']['name']);
                $this->product->set('image4',$_FILES['image4']['name']);                 

			}
			if (count($err)==0) {
			$id=$this->product->createProduct();
				if ($id) {
					$err['sucess_messsage']="Product Created with Id $id";
				}else{
					$err['error_messsage']="Product not Created";
				}
			}
			
			
			$this->error=$err;
	}
		
		$this->title='Create Product';
		$this->parentcategory=$this->category->getAllParentCategory();
		// print_r($this->parentcategory);
		$this->childcategory=$this->category->getChildCategory();
		$this->loadView('product/create');

	}

	function index(){
		$this->productdata=$this->product->getAllProduct();
		// print_r($this->productdata);
		$this->title='list product';
		$this->loadView('product/index');
		
	}
	function delete($id)
	{
			$this->product->set('id',$id);
			$this->product->deleteproductByID();
			$this->productdata=$this->product->getAllProduct();
		// print_r($this->productdata);
		$this->title='list product';
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

}

?>