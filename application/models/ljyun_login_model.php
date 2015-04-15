<?php
/**
* 开发人员 - 王瀛
* 开发时间 - 2012-5-29
* 邮	箱 - puny_y_87830@sina.com
*/
class Ljyun_login_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function check_admin($merchant_id,$user_name,$password)
	{
		//echo 'model, $this->ljyun_db: ', $this->ljyun_db->database, '<br/>';

		echo $password. ', model, $this->db: ', $this->db->database, '<br/>';
	}

}
?>
