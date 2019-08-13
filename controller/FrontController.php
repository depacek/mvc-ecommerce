<?php
	class FrontController extends Controller{
		function __construct(){
			@session_start();
			$this->category=$this->loadModel('category',true);
			$this->product=$this->loadModel('product',true);
			$this->cart=$this->loadModel('cart');
			$this->cart->set('session_id',session_id());
			$this->cartitem=$this->cart->getCartItemBySessionID();

			$this->menuitem=$this->category->getMenuItem();
			$this->navitem=$this->category->getNavItem();
			$this->featureproduct=$this->product->getFeatureProduct();
						
		}
		function index(){
			$this->title='Ecommerce Home page';
			$this->sliderproduct=$this->product->getSliderProduct();
			$this->newproduct=$this->product->getNewProduct();
			$this->loadView('front/index');

		}
		function category($slug){
			$this->title='Ecommerce Category page';
			$this->category->set('slug',$slug);
			$this->categoryitem=$this->category->getCategoryBySlug();
			$this->product->set('category_id',$this->categoryitem[0]->id);
			$this->productlist=$this->product->getProductByCategoryID();
			$this->chunkproduct=array_chunk($this->productlist,3);
			// echo '<pre>';
			// print_r($this->chunkproduct);
			$this->loadView('front/category');

		}
		function product($slug){
			$aslug=explode('.',$slug);
			$aaslug=explode('-',$aslug[0]);
			$this->product->set('id',$aaslug[count($aaslug)-1]);
			$this->productdetails=$this->product->getProductByID();
			$this->title=$this->productdetails[0]->name;
			if (isset($_POST['add_cart'])) {
				print_r($_POST);
			}
			$this->loadView('front/product');
			


		}
	}
?>