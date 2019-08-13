<?php
	class CartController extends Controller{
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
		function add(){
			if (isset($_POST['BtnCart'])) {
				$this->cart->set('product_id',$_POST['product_id']);
				$this->cart->set('price',$_POST['price']);
				$this->cart->set('color',$_POST['color']);
				$this->cart->set('size',$_POST['size']);
				$this->cart->set('quantity',$_POST['quantity']);
				$this->cart->set('session_id',session_id());
				if (isset($_SESSION['customer_id'])) {
					$this->cart->set('customer_id',$_SESSION['customer_id']);
				}
				$cartitem=$this->cart->getCartDetails();
				// print_r($cartitem);
				if (count($cartitem)==1) {
					$this->cart->set('quantity',$_POST['quantity'] + $cartitem[0]->quantity);
					$this->cart->set('id',$cartitem[0]->id);
					$status=$this->cart->updateCartQuantity();
					if ($status) {
						$_SESSION['sucess_messsage']="Item updated successfully";
					}else{
						$_SESSION['error_messsage']="Item can't updated";
					}
					$path='front/product/'.$_POST['slug'].'-'.$_POST['product_id'].'.html';
					$this->redirect($path);
				}else{
					$status=$this->cart->saveCart();
					if ($status) {
						$_SESSION['sucess_messsage']="Item added successfully";
					}else{
						$_SESSION['error_messsage']="Item can't added";
					}
					$path='front/product/'.$_POST['slug'].'-'.$_POST['product_id'].'.html';
					$this->redirect($path);
				}
			}
		}
		function index(){
			$this->title='Ecommerce Cart page';
			$this->loadView('cart/index');
		}
		function checkout(){
			if (!isset($_SESSION['customer_id'])) {
				$this->redirect('customer/login');
			}
			$this->title='Check out page';
			$this->loadView('cart/checkout');
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