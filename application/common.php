<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * @param $data
 * @return bool|null|string
 */
function sys_config_get($data)
{
    $file = ROOT_PATH . 'data/config.php';

    $cfg = !file_exists($file)?:include $file;

    return !empty($cfg[$data])? file_get_contents($cfg[$data]):null;
}