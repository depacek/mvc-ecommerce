<?php
class CustomerModel extends Model{
	protected $id,$name,$username,$email,$password,$salt,$verification_key,$phone,$address,$status,$last_login;

	function saveCustomer(){
		echo $sql="insert into tbl_customer(name,username,email,password,salt,verification_key,phone,address,status) values('$this->name','$this->username','$this->email','$this->password','$this->salt','$this->verification_key','$this->phone','$this->address','0')";
		return $this->insert($sql);
	}
	function getcustomerByverificationkey(){
		$sql="select * from tbl_customer where status=0 and verification_key='$this->verification_key' ";
		return $this->select($sql);
	}
	function verifyCustomer(){
		$sql="update tbl_customer set status=1,verification_key='' where verification_key='$this->verification_key'";
		return $this->update($sql);
	}
	function getCustomerByEmail(){
		$sql="select * from tbl_customer where email='$this->email' and status=1";
		return $this->select($sql);
	}

}
?>