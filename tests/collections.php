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

echo "sign in\n";
HiARSDK::getInstance()->sign_in(ACCOUNT, PASSWORD);

//echo "get App collections\n";
//var_dump(HiARSDK::getInstance()->getAppCollections());
//
//echo "create a new collections\n";
//$info = HiARSDK::getInstance()->createCollection("testCol", "test");
//var_dump($info);
//
//var_dump(HiARSDK::getInstance()->changeCollectionName($info['cid'], "testCol1"));
//
//var_dump(HiARSDK::getInstance()->getCollection($info['cid']));

//$target_id = HiARSDK::getInstance()->addImage(2183, __DIR__ . "/image.png", "test1", "test");
//var_dump($target_id);

//var_dump(HiARSDK::getInstance()->changeImageName(2183,$target_id, "testCol1"));

//var_dump(HiARSDK::getInstance()->getImageInfo(2183,$target_id));

//var_dump(HiARSDK::getInstance()->getImageList(2183 , 1 , 2));

$pub_id = HiARSDK::getInstance()->publishCollection(2183);
var_dump($pub_id);

var_dump(HiARSDK::getInstance()->getCollectionPublishStatus(2183 , "5ec1040fbd66b1911da6ae66d8b37754ebf38d14"));



//var_dump(HiARSDK::getInstance()->deleteImage(2183,$target_id));

//$pubid = HiARSDK::getInstance()->publishCollection($info['cid']);
//var_dump($pubid);

//var_dump(HiARSDK::getInstance()->deleteCollection($info['cid']));