<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');?>

<?
Bitrix\Main\Loader::includeModule("sale");
Bitrix\Main\Loader::includeModule("catalog");
Bitrix\Main\Loader::includeModule("main");

//if (CSaleBasket::Delete(22))
//$arRes = ;
$res = ['afd'=>3434, 'fdfdfd'=>555];
    echo json_encode($res);


?>