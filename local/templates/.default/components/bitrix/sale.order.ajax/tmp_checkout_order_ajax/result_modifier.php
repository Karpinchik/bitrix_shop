<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arParams
 * @var array $arResult
 * @var SaleOrderAjax $component
 */

$component = $this->__component;
$component::scaleImages($arResult['JS_DATA'], $arParams['SERVICES_IMAGES_SCALING']);




//$arr_prop_items = [];
//$rr = 0;
//foreach ($arResult['BASKET_ITEMS'] as $arItem):
//
//    $res = CIBlockElement::GetProperty(27, $arItem['PRODUCT_ID']);
//
//    $rr+= $arItem['QUANTITY'];
//
//
//    while ($ob = $res->Fetch())
//    {
//        $arr_prop_items[$arItem['PRODUCT_ID']][]= $ob['VALUE'];
//        $arResult[$arItem['PRODUCT_ID']][]= $ob['VALUE'];
//    }
//
//endforeach;
//$arResult['COUNT_ITEMS'] = $rr;
$arResult['DELIVERY'][2]['CHECKED'] = "N";
$arResult['DELIVERY'][3]['CHECKED'] = "Y";





?>










