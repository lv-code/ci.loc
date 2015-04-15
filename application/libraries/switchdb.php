<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * description: 数据层模型demo，是新建model的规范写法
 * author: zg
 * date: 2013-11-07
 */

class SwitchDB {

    var $ci = null;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

    public function connectMIS()
    {
        $db['default']['hostname'] = 'localhost';
        $db['default']['username'] = 'root';
        $db['default']['password'] = '123';
        $db['default']['database'] = 'test';
        $db['default']['dbdriver'] = 'mysql';
		$this->ci->db = $this->ci->load->database($db['default']);
		//$this->load->database($db);
    }

    public function connectOrder($ljyunid)
    {
        /*
        if (!is_numeric($ljyunid))
        {
            echo 'the param ljyunid is not a numeric,please check it.';
            return;
        }
         */
        $db['hostname'] = 'localhost';
        $db['username'] = 'root';
        $db['password'] = '123';
        $db['database'] = 'db_';
        $db['dbdriver'] = 'mysql';
        
        $db['database'] .= $ljyunid;
		$this->ci->db = $this->ci->load->database($db,true);
    }

    //得到配置
    private function _get_conf($id)
    {
        $db['default']['hostname'] = 'localhost';
        $db['default']['username'] = 'root';
        $db['default']['password'] = '123';
        $db['default']['database'] = 'test';
        $db['default']['dbdriver'] = 'mysql';
        $db['default']['dbprefix'] = '';
        $db['default']['pconnect'] = FALSE;
        $db['default']['db_debug'] = TRUE;
        $db['default']['cache_on'] = FALSE;
        $db['default']['cachedir'] = '';
        $db['default']['char_set'] = 'utf8';
        $db['default']['dbcollat'] = 'utf8_general_ci';
        $db['default']['swap_pre'] = '';
        $db['default']['autoinit'] = TRUE;
        $db['default']['stricton'] = FALSE;

        $db['order']['hostname'] = '192.168.9.224';
        $db['order']['username'] = 'common';
        $db['order']['password'] = 'common';
        $db['order']['database'] = 'db_';
        $db['order']['dbdriver'] = 'mysql';
        $db['order']['dbprefix'] = '';
        $db['order']['pconnect'] = FALSE;
        $db['order']['db_debug'] = TRUE;
        $db['order']['cache_on'] = FALSE;
        $db['order']['cachedir'] = '';
        $db['order']['char_set'] = 'utf8';
        $db['order']['dbcollat'] = 'utf8_general_ci';
        $db['order']['swap_pre'] = '';
        $db['order']['autoinit'] = TRUE;
        $db['order']['stricton'] = FALSE;

    }

}
