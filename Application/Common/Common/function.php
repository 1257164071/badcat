<?php
/**
 * Created by PhpStorm.
 * User: nightdays
 * Date: 17-12-13
 * Time: 上午10:26
 */

 function log_write($msg){
    $data = date('Y-m-d H:i:s',time())."\r\n";
    if(is_array($msg)){
        $msg = var_export($msg,true);
    }
    $data .= $msg."\r\n";
    $file = 'log.txt';
    file_put_contents($file,$data,FILE_APPEND);
}