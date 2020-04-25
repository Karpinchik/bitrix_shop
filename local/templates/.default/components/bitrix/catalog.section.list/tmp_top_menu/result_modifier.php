<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


foreach ($arResult["SECTIONS"] as &$arItem) {
    if ($arItem['UF_SHOW_MENU'] == 1) {
        $arResult["MENU_TOP"][] = $arItem;
    }
}







