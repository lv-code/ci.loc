<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* desc: 日志功能
* author: yesGang@hotmail.com
* date: 2012-11-16
*/

// ------------------------------------
//日志类
//格式：log/年月/merchant_id.log
// ------------------------------------
class My_log
{
	protected $CI;
	protected $ljyun_db;
	private static $log_size = 5242880; // 1024 * 1024 * 5 = 5M
	private $log_dir;
	//日志格式
	private $log_fmt;
	
	function __construct()
	{
		error_reporting(E_ALL);
		header('content-Type:text/html;charset=utf-8');
		$this->CI = &get_instance();
		/*
		$this->CI->load->library('session');
		$dbName = 'ljyun_'.intval($this->CI->session->userdata('merchant')).'_merchant';
		$arr = array("hostname"=>"localhost","username"=>'root',"password"=>'',"database"=>$dbName);
		$this->ljyun_db = $this->CI->load->ljyun_database($arr);
		*/
		//print_r(get_defined_constants());
		
		$this->log_dir=FCPATH.APPPATH.'my_logs/';
		$this->log_fmt='ljyun_512';
		var_dump($this->log_dir);
	}

	/*
	 * desc : 记录日志，谁干了什么
	 * return : 
	 */
	public function write($msg, $type='log')
	{
		// 检查日志目录是否可写
         if ( !file_exists($this->log_dir) ) {
            exit($this->log_dir.' is not exist');
        }
        //chmod($this->log_dir,0777);
        if (!is_writable($this->log_dir)) exit('$this->log_dir is not writeable !');
    	$s_now_time = date('[Y-m-d H:i:s l]');

        // 根据类型设置日志目标位置
        $target   = $this->log_dir;
        switch($type)
        {
            case 'debug':
                $target .= 'Out_' . $this->log_fmt . '.log';
                break;
            case 'error':
                $target .= 'Err_' . $this->log_fmt . '.log';
                break;
            case 'log':
                $target .= 'Log_' . $this->log_fmt . '.log';
                break;
            default:
                $target .= 'Log_' . $this->log_fmt . '.log';
                break;
        }
        //检测日志文件大小, 超过配置大小则重命名
        if (file_exists($target) && self::$log_size <= filesize($target)) {
            $s_file_name = substr(basename($target), 0, strrpos(basename($target), '.log')). '_' . time() . '.log';
            rename($target, dirname($target) . DS . $s_file_name);
        }
        clearstatcache();
        // 写日志, 返回成功与否
        return error_log("$s_now_time $msg\n", 3, $target);
	}

	
}

