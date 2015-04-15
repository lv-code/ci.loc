<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 给页的标签产生href
 * author: zg
 * date: 2015-04-15
 */
function getListHref($name, $id=0)
{
    if(!in_array($name, array('brand','category','attr','factor','search','page','sort')))
    {
        return 'param $name wrang!';
    }
    $href = '';
    $url = 'index.php/list-brand0-category0-attr0-factor0-search0-page0-sort1.html';
    $url = str_replace($name.'0', $name.(int)$id, $url);
    return base_url($url);
}

