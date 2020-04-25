<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');?>

<?
//Bitrix\Main\Loader::includeModule("sale");
Bitrix\Main\Loader::includeModule("catalog");
Bitrix\Main\Loader::includeModule("main");



$id_item_del_basket = intval($_GET['ID']);
if (!CModule::IncludeModule("sale")) return;
if(!empty($id_item_del_basket)){
    CSaleBasket::Delete($id_item_del_basket);
//    $aa = CSaleBasket::GetList($id_item_del_basket);


}



echo json_encode($id_item_del_basket);


?>


