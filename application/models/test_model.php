<?php
class test_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function check($merchant_id,$user_name,$password)
	{
		//echo 'model, $this->ljyun_db: ', $this->ljyun_db->database, '<br/>';
		echo $password. ', model, $this->db: ', $this->db->database, '<br/>';
	}
	function show()
	{
		$sql = 'SHOW TABLES';
		//$rs = $this->db->query($sql);
		$rs = $this->db->query($sql)->result_array();
		$arr = array_slice($rs,0,3);
		array_walk($arr,array($this, 'foo'));
		echo '<br/>in test_model show print_r: ';
		echo implode(', ',$arr);
	}
	function foo(&$arr, $key, $chr='')
	{
		$arr = array_pop($arr);
	}

}
