<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 16/8/8
 * Time: 下午11:09
 */

require_once __DIR__ . "/../vendor/autoload.php";
require_once "config.php";

use HiAR\HiARSDK;

HiARSDK::getInstance()->init(APPKEY, SECRET);

HiARSDK::getInstance()->sign_in(ACCOUNT, PASSWORD);

$collectons = HiARSDK::getInstance()->getAccountCollections();

var_dump($collectons);

var_dump(HiARSDK::getInstance()->recognize(__DIR__ . "/image.png", $collectons , 5));