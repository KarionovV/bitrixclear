<?
/**
 * @global $APPLICATION;
 * @var $arTemplateParams - included from .settings.php
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Page\Asset as Asset;

include ".settings.php";


if($arTemplateParams["ENABLE_HTML5JS"])
    Asset::getInstance()->addString( '<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha512-UDJtJXfzfsiPPgnI5S1000FPLBHMhvzAMX15I+qG2E2OAzC9P1JzUwJOfnypXiOH7MRPaqzhPbBGDNNj7zBfoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><![endif]-->', true, 'BEFORE_CSS' );

if($arTemplateParams["ENABLE_JQUERY"])
    Asset::getInstance()->addString( '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>', true, 'BEFORE_CSS' );

if($arTemplateParams["ENABLE_RESET_CSS"])
    Asset::getInstance()->AddCss( SITE_TEMPLATE_PATH . "/css/vendors/reset.css");

if($arTemplateParams["ENABLE_BOOTSTRAP"]){
    Asset::getInstance()->AddCss( SITE_TEMPLATE_PATH . "/css/vendors/bootstrap/bootstrap.min.css");
    Asset::getInstance()->AddJs( SITE_TEMPLATE_PATH . "/js/vendors/bootstrap/bootstrap.min.js");
}



Asset::getInstance()->addString( $arTemplateParams["META_VIEWPORT"], true, 'BEFORE_CSS' );
Asset::getInstance()->addString( '<meta name="author" content="' . $arTemplateParams["META_AUTHOR"] . '" />', true, 'BEFORE_CSS' );
Asset::getInstance()->addString( '<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />', true, 'BEFORE_CSS' );
?>