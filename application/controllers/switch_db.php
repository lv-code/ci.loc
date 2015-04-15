<?php
/**
* 开发人员 - 王瀛
* 开发时间 - 2012-5-29
* 邮	箱 - puny_y_87830@sina.com
*/
class Switch_db extends CI_Controller {

	private $pdata=array();
	
	function __construct()
	{	
		parent::__construct();
	}

	function index()
	{
		$this->load->model('demo_model','demo');
		$this->load->model('t1_mdl','t1');
		$this->load->model('t2_mdl','t2');
        $this->t1->show();
        $this->t2->show();
    }

	
}

