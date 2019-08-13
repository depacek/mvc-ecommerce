<?php
class UserController extends Controller{
	function login(){
		require_once "model/AdminModel.php";
		$admin=new AdminModel();
		if (isset($_POST['btnLogin'])) {
			$err=[];
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$email=$admin->set('email',$_POST['email']);
			}else{
				$err['email']= "Enter email";
			}
			if (isset($_POST['password']) && !empty($_POST['password'])) {
				$password=$_POST['password'];
					// echo $salt=uniqid();
					// echo '<br>';
					// echo $pass=sha1($salt.$_POST['password']);
			}else{
				$err['password']= "Enter password";
			}
			if (count($err)==0) {
				$data=$admin->getAdminByEmail();
				// print_r($data);
				if (count($data)==1) {
					$np=sha1($data[0]->salt.$password);
					if ($np==$data[0]->password) {
						session_start();
						$_SESSION['admin_name']=$data[0]->name;
						$_SESSION['admin_email']=$data[0]->email;
						$_SESSION['admin_username']=$data[0]->username;
						$path=base_url().'user/dashboard';
						header("location:$path");
					}else{
						$err['password']="Password not match";
					}
				}else{
					$err['email']="Email not match";
				}
			}
		}
		require_once "view/user/login.php";
	}

	function register()
	{
		require_once "view/user/register.php";
	}
	function dashboard(){
		session_start();
		$this->title="Dashboard";		

		$this->loadView('user/dashboard');

	}
}

?>