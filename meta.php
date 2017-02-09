<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use \Bitrix\Main\Page\Asset;
include_once('parameters.php');
global $SOCIALIMAGES;
Asset::getInstance()->addString( '<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->', true, 'BEFORE_CSS' );
Asset::getInstance()->addString( '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>', true, 'BEFORE_CSS' );
Asset::getInstance()->addString( '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">', true, 'BEFORE_CSS' );
Asset::getInstance()->addString( '<meta http-equiv="X-UA-Compatible" content="IE=edge">', true, 'BEFORE_CSS' );
Asset::getInstance()->addString( '<meta name="author" content="Веб студия IT-INFINITY" />', true, 'BEFORE_CSS' );
Asset::getInstance()->addString( '<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />', true, 'BEFORE_CSS' );

//SetSocialMetaData
//Asset::getInstance()->addString( '<meta itemprop="name" content="' . $APPLICATION->GetTitle() . '" />', true, 'BEFORE_CSS' );
//Asset::getInstance()->addString( '<meta itemprop="description" content="' . $APPLICATION->GetProperty('description') . '" />', true, 'BEFORE_CSS' );
//Asset::getInstance()->addString( '<meta itemprop="image" content="http://' . $_SERVER['SERVER_NAME'] . $SOCIALIMAGES['IMAGE'] . '" />', true, 'BEFORE_CSS' );

$arAvailableList = array(

);
?>