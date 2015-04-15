<?php
class t1_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function show()
	{
		$sql = 'SHOW TABLES';
		$rs = $this->db->query($sql)->result_array();
		$arr = array_slice($rs,0,3);
		array_walk($arr,array($this, 'foo'));
		echo '<br/>in test_model show print_r: ';
		echo implode(', ',$arr);
	}
	
}
