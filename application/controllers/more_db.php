<?php
class more_db extends CI_Controller 
{
	private $pdata=array();
	
	function __construct()
	{	
		parent::__construct();
	}
	function index()
	{
		$this->load->model('my_db_model','M_db',TRUE);
		$this->load->model('test_model','test');
		//$this->load->database();
		//var_dump($this->db->database);
		
		$this->db = $this->M_db->toPrivate('db_ljlj');
		var_dump($this->db->database);
		$this->test->show();
		
		$this->db = $this->M_db->toPrivate('test');
		var_dump($this->db->database);
		$this->test->show();
		
		$this->M_db->toPublic('mysql');
		var_dump($this->db->database);
		$this->test->show();
		exit;
		//连接私有库
		//echo '$this->ljyun_db, toPrivate: ', $this->ljyun_db->database, '<br/>';
		$login_result = $this->login->check_admin(512,'zg',1);
		//连接私有库
		$this->M_db->toPrivate('test');
		$this->load->model('ljyun_login_model','login');
		//echo '$this->ljyun_db, toPrivate: ', $this->ljyun_db->database, '<br/>';
		$login_result = $this->login->check_admin(512,'zg',2);
		//连接私有库
		$this->M_db->toPublic('mysql');
		$this->load->model('ljyun_login_model','login');
		//echo '$this->ljyun_db, toPublic: ', $this->ljyun_db->database, '<br/>';
		$login_result = $this->login->check_admin(512,'zg',3);
	}
	
}

