<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 16/8/8
 * Time: 下午10:11
 */

require_once __DIR__ . "/../vendor/autoload.php";
require_once "config.php";

use HiAR\HiARSDK;

HiARSDK::getInstance()->init(APPKEY, SECRET);

HiARSDK::getInstance()->sign_in(ACCOUNT, PASSWORD);

var_dump(HiARSDK::getInstance()->getAppCollections());

$info = HiARSDK::getInstance()->createCollection("testCol", "test", true);
var_dump($info);

var_dump(HiARSDK::getInstance()->changeCollectionName($info['cid'], "testCol1"));

var_dump(HiARSDK::getInstance()->getCollection($info['cid']));

var_dump(HiARSDK::getInstance()->deleteCollection($info['cid']));