<?
/**
 * @global $APPLICATION;
 * @var $arTemplateParams - included from .settings.php
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc as Loc;
use \Bitrix\Main\Page\Asset as Asset;
include ".settings.php";
?>
<!DOCTYPE html>
<html lang="<?=$arTemplateParams["HTML_LANG"];?>">
	<head>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/init.js');?>

		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/main.css' );?>

		<?$APPLICATION->ShowHead();?>

		<title><?$APPLICATION->ShowTitle()?></title>
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
