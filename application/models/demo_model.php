<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * description: 数据层模型demo，是新建model的规范写法
 * author: zg
 * date: 2013-11-07
 */

class Demo_Model extends CI_Model
{
	//表名
	protected $_table='tableName';
	//主键
	protected $_primary_key = 'id';
	
	public function __construct()
	{
		parent::__construct();
        $this->load->library('switchdb');
        $this->db = $this->switchdb->connectMIS();
        var_dump($this->db->database);
        $this->switchdb->connectOrder('wp');
        var_dump($this->db->database);
	}

    //这是一个demo方法，分表规则
    private function _get_table($id)
    {
        $str = crc32($id);
        if($str<0)
        {
            $hash = '0'.substr(abs($str), 0, 1);
        } 
        else
        {
            $hash = substr($str, 0, 2);
        }
        $this->_table = $this->_table.'_'.$hash;
    }

}
