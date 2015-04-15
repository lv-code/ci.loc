<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//生成静态页面
class Create_html extends CI_Controller 
{
    var $topic_path = './topic/';
    function index()
    {
        $this->load->library('jquery_validation');
    }
      

}

/* End of file welcome.php */
/* Location: ./application/controllers/create_html.php */

