<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* desc : 显示商品信息页面，测试平台多库
* date : 2013/01/08
*/
class productInfo extends CI_Controller 
{
	private $pdata=array();
	
	function __construct()
	{	
		parent::__construct();
		$this->load->model('ljyun_db_model','M_db',TRUE);
		$this->output->enable_profiler(TRUE);
	}

	function show()
	{
		echo '1234';
		print_r($this->uri->segments[1]);
		//$this->load->view('login.html');
	}
	
}

