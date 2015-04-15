<?php
/**
* 开发人员 - zg
* 开发时间 - 2015-04-13
* 测试CI的URI路由，用于商品列表页
*/
class Goods_list extends CI_Controller {

	private $pdata=array();
	
	function __construct()
	{	
		parent::__construct();
	}
	function index($brand, $category, $attr, $factor, $search, $page, $sort)
	{
        $this->load->helper('url');
        $this->load->helper('my_helper');
        var_dump($brand, $category, $attr, $factor, $search, $page, $sort);
        $this->load->view('list');
	}

    	
}

