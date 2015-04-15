<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//生成静态页面
class Create_html extends CI_Controller 
{
    var $topic_path = './topic/';
    //生成静态页面
    function create_html($filename)
    {  
        parent::__construct();
        if ( empty($filename) || empty($this->topic_path) )
        {
            exit('filename and topic_path can not by empty');
        }
        $this->load->helper('file');  
        //加载专题模板的主控视图
        $this->load->view('topic/main');  
        $content = $this->output->get_output();  
        if ( !write_file($this->topic_path.$filename.'.html', $content))  
        {  
            echo 'Unable to write the file';  
        }  
        else  
        {  
            echo 'File written!';  
        }  
        exit;
    }  

}

/* End of file welcome.php */
/* Location: ./application/controllers/create_html.php */

常量只能定义为标量(string, bool, int)或null
