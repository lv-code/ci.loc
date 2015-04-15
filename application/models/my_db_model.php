<?php
class my_db_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	//私有库连接
	function toPrivate($dbName)
	{
		$arr = array("hostname"=>MY_DB_HOST,"username"=>MY_DB_USER,"password"=>MY_DB_PASSWD,"database"=>$dbName);
		return $this->load->ljyun_database($arr, TRUE);
	}
	//公共库连接
	function toPublic()
	{
		$arr = array("hostname"=>MY_DB_HOST,"username"=>MY_DB_USER,"password"=>MY_DB_PASSWD,"database"=>'mysql');
		$this->db = $this->load->ljyun_database($arr, TRUE);
	}
	//临时错误信息表连接
	function toError($error)
	{
		$arr = array("hostname"=>MY_DB_HOST,"username"=>MY_DB_USER,"password"=>MY_DB_PASSWD,"database"=>'testABC');
		$this->ljyun_db = $this->load->ljyun_database($arr);
		$this->ljyun_db->insert('error',$error);
	}

}
