<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/3 0003
 * Time: 11:49
 */
include_once './create.php';

$img = new CreateIdentifyingCode(120,60,6);
$path = dirname(__FILE__).'/file.jpg';
//header('Content-type: image/jpg');
$img->response();