<?php
/**
* 开发人员 - zg
* 开发时间 - 2015-04-13
* 测试CI的URI路由
*/
class Route_test extends CI_Controller {

	private $pdata=array();
	
	function Route_test()
	{	
		parent::__construct();
	}
	function index1()
	{
        var_dump($this->uri->get());
        $segs = $this->uri->segment_array();
        var_dump($segs);
        foreach ($segs as $segment)
        {
            echo $segment;
            echo '<br />';
        }
	}
	function index2($brand, $onecate)
	{
        var_dump($brand, $onecate);
	}
	function index($brand, $onecate, $twocate, $threecate, $attr, $factor, $search, $page, $sort)
	{
        var_dump($brand, $onecate, $twocate, $threecate, $attr, $factor, $search, $page, $sort);
	}
    function detail($goods_id)
    {
        var_dump($goods_id);
    }
	
}

