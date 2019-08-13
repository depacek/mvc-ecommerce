<?php
	class CustomerController extends Controller{
		function __construct(){
			@session_start();
			$this->category=$this->loadModel('category',true);
			$this->product=$this->loadModel('product',true);
			$this->customer=$this->loadModel('customer',true);
			$this->cart=$this->loadModel('cart');
			$this->cart->set('session_id',session_id());
			$this->cartitem=$this->cart->getCartItemBySessionID();

			$this->menuitem=$this->category->getMenuItem();
			$this->navitem=$this->category->getNavItem();	
			$this->featureproduct=$this->product->getFeatureProduct();
					
		}
		function login(){
			if (isset($_SESSION['customer_username']) && !empty($_SESSION['customer_username'])) {
				$this->redirect('Customer/checkout');
			}
			if (isset($_POST['BtnLogin'])) {
				// print_r($_POST);
				$err=[];
				if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) !='') {
					$this->customer->set('email',$_POST['email']);
					$customerdata=$this->customer->getCustomerByEmail();
				}else{
					$err['email']='Enter email';
				}
				if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password']) !='') {
					if (count($customerdata)==1) {
						$np=sha1($_POST['password'].$customerdata[0]->salt);
						if ($np == $customerdata[0]->password) {
							$_SESSION['customer_id']=$customerdata[0]->id;
							$_SESSION['customer_name']=$customerdata[0]->name;
							$_SESSION['customer_username']=$customerdata[0]->username;
							$_SESSION['customer_email']=$customerdata[0]->email;
							$this->redirect('Customer/checkout');
						}else{
							$err['login']='Email and Password not matched';
						}
					}else{
						$err['login']='Email not found';
					}
				}else{
					$err['password']='Enter password';
				}

				$this->error=$err;
			}
			
			$this->title='Customer login page';
			$this->loadView('customer/login');
			
		}
		function register(){
			if (isset($_SESSION['customer_username']) && !empty($_SESSION['customer_username'])) {
				$this->redirect('Customer/checkout');
			}
			if (isset($_POST['BtnReg'])) {
				// print_r($_POST);
				$err=[];
				if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']) !='') {
					$this->customer->set('name',$_POST['name']);
				}else{
					$err['name']='Enter name';
				}
				if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username']) !='') {
					$this->customer->set('username',$_POST['username']);
				}else{
					$err['username']='Enter username';
				}
				if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) !='') {
					$this->customer->set('email',$_POST['email']);
				}else{
					$err['email']='Enter email';
				}
				
					$salt=uniqid();
					$this->customer->set('salt',$salt);
					$vk=md5($salt);
					$this->customer->set('verification_key',$vk);
					$this->customer->set('password',sha1($_POST['password'].$salt));
					$this->customer->set('phone',$_POST['phone']);
					$this->customer->set('address',$_POST['address']);

					$status=$this->customer->saveCustomer();
					if ($status) {
						$path=base_url().'customer/verify/'.$vk;
						$link="<a href='$path' target='_blank'> CLICK HERE TO VERIFY !!</a>";
						// sent mail
						// mail(to, subject, message);
						$_SESSION['sucess_messsage']="customer Register success , $link";
					}else{
						$_SESSION['error_messsage']="customer Register fail";
					}



				$this->error=$err;
				// $this->error=$err;
			}
			$this->title='Customer Register page';
			$this->loadView('customer/register');
		}
		function verify($key){
		$this->customer->set('verification_key',$key);
		$customerdata=$this->customer->getcustomerByverificationkey();
		// print_r($customerdata);
		if (count($customerdata)==1) {
			$st=$this->customer->verifyCustomer();
			if ($st) {
				$_SESSION['sucess_messsage']="customer Verification success. Login to proceed";
				$this->redirect('Customer/login');
			}else{
				$_SESSION['error_messsage']="Verification failed";
				$this->redirect('Customer/register');
			}
		}else{
			$_SESSION['error_messsage']="Verification key doesn't match";
			$this->redirect('Customer/register');
		}


		}

		function checkout(){
			if (!isset($_SESSION['customer_id'])) {
				$this->redirect('customer/login');
			}
			$this->title='Check out page';
			$this->loadView('cart/checkout');
		}
		
	}
?>