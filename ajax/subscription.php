<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("subscribe");

/*
 * Данный код позволит сохранять  отдельным списком все mail и имена пользователей подписавшихся на рассылку
 */
//    use Bitrix\Main\Mail\Event;
//    CModule::includeModule('iblock');
//    $el = new CIBlockElement;
//    $iblock_id = 21;
//
//    $PROP = array();
//    $PROP['NAME'] = Array(
//        "n0" => Array(
//            "VALUE" => $_POST['name'],
//            "DESCRIPTION" => "description"),
//    );
//    $PROP['EMAIL'] = Array(
//        "n0" => Array(
//            "VALUE" => $_POST['email'],
//            "DESCRIPTION" => "description"),
//    );
//
//    $arFields = array(
//        "IBLOCK_ID" => $iblock_id,
//        "IBLOCK_SECTION_ID" => false,
//        "NAME" => $_POST['name'],
//        "PROPERTY_VALUES" => $PROP,
//    );
//
//    if($PRODUCT_ID = $el->Add($arFields)){
//        $arResult['status'] = 'ok';
//    } else{
//        $arResult['status'] = 'error';
//        $arResult['error'] = $el->LAST_ERROR;
//    }

    $arFields = Array(
        "EMAIL" => $_POST['email'],
        "ACTIVE" => "Y",
        "RUB_ID" => 1
    );
    $subscr = new CSubscription;

    if($ID = $subscr->Add($arFields)) {                 //   метод подписки на рассылку
        $arResult['status'] = 'ok';
    } else{
        $arResult['status'] = 'error';
        $arResult['error'] = $subscr->LAST_ERROR;
    }

echo json_encode($arResult);


