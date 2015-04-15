<?php
/**
* 开发人员 - 王瀛
* 开发时间 - 2012-5-29
* 邮	箱 - puny_y_87830@sina.com
*/
class Login extends CI_Controller {

	private $pdata=array();
	
	function Login()
	{	
		parent::__construct();
	}
	function test()
	{
		$this->load->model('ljyun_db_model','M_db',TRUE);
		$this->load->model('ljyun_login_model','login');
		//$this->load->database();
		//var_dump($this->db->database);
		
		$this->M_db->toPrivate('db_ljlj');
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
	function index()
	{
		$this->load->view('login.html');
	}
	
}

