<?php
class AdminModel extends Model{
	protected $id,$name,$email,$password,$salt,$last_login,$status;
	function getAdminByEmail(){
		$sql="select * from tbl_admin where email='$this->email' and status=1";
		return $this->select($sql);
	}

}
?>