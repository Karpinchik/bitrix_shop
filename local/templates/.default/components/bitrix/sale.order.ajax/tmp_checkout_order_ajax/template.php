<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Sale\Fuser;
use Bitrix\Sale\OrderBase;
use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var CMain $APPLICATION
 * @var CUser $USER
 * @var SaleOrderAjax $component
 * @var string $templateFolder
 */

?>
<!--    <pre>--><?//print_r($arResult);?><!--</pre>-->
<div class="breadcrumbs">
    <div class="container">

        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "crumb",
            Array(
                "COMPONENT_TEMPLATE" => "crumb",
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        );?>

    </div>
</div>

    <div class="checkout">
        <div class='container'>
            <div class="checkout-tabs">
                <a href="http://karpinchik.fortest.org/personal/order/make/index.php" class="checkout-tabs__item">Корзина</a>
                <a href="http://karpinchik.fortest.org/personal/order/make/checkout.php" class="checkout-tabs__item active">Оформление заказа</a>
            </div>
            <div class="checkout-content">
                <div class="checkout-column">
                    <div class="checkout-block">
                        <div class="checkout-block__label">Доставка:</div>
                        <div class="checkout-block__value">Самовывоз в Москве</div>
                    </div>
                    <div class="checkout-block">
                        <div class="checkout-block__label">Оплата:</div>
                        <div class="checkout-block__value">При получении картой или наличными</div>
                    </div>
                    <div class="checkout-block">
                        <div class="checkout-block__label">Дополнительная информация:</div>

                                <div class="checkout-block__value"><?= $arResult['DELIVERY'][3]["DESCRIPTION"];?></div>

                    </div>
                </div>
                <div class="checkout-column">
                    <form action="#" class="checkout-form">
                        <div class="checkout-form-body">
                            <div class="checkout-form__title">Введите Ваши данные</div>
                            <div class="checkout-form-input">
                                <input type="text" name="form[]" data-value="Ваше имя" class="input min" />
                            </div>
                            <div class="checkout-form-input">
                                <input type="text" name="form[]" data-value="Телефон*" class="input req min" />
                            </div>
                            <div class="checkout-form-input">
                                <input type="text" name="form[]" data-value="E-mail" class="input email min" />
                            </div>
                            <div class="checkout-form-address">
                                <div class="checkout-form-address__label">Забрать по адресу </div>
                                <div class="checkout-form-address__value"><?= $arResult['STORE_LIST'][1]['ADDRESS']?></div>
                            </div>
                            <div class="checkout-form-input">
                                <input type="text" name="form[]" data-value="Комментарий к заказу" class="input min" />
                            </div>
                            <div class="checkout-form-button">
                                <button type="submit" id="button_order" class="form__btn btn-3 min">Оформить заказ</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="checkout__map map" id="map">

<!--                --><?//$APPLICATION->IncludeComponent(
//                    "bitrix:map.yandex.view",
//                    ".default",
//                    Array(
//                        "API_KEY" => "",
//                        "COMPONENT_TEMPLATE" => ".default",
//                        "CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
//                        "INIT_MAP_TYPE" => "MAP",
//                        "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.71830338295296;s:10:\"yandex_lon\";d:37.55859132719517;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.55859132719522;s:3:\"LAT\";d:55.718303382959185;s:4:\"TEXT\";s:31:\"Центр самовывоза\";}}}",
//                        "MAP_HEIGHT" => "500",
//                        "MAP_ID" => "",
//                        "MAP_WIDTH" => "600",
//                        "OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
//                    )
//                );?>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:map.google.view",
                    "",
                    Array(
                        "API_KEY" => "",
                        "CONTROLS" => array("SMALL_ZOOM_CONTROL","TYPECONTROL","SCALELINE"),
                        "INIT_MAP_TYPE" => "ROADMAP",
                        "MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
                        "MAP_HEIGHT" => "500",
                        "MAP_ID" => "",
                        "MAP_WIDTH" => "600",
                        "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING","ENABLE_KEYBOARD")
                    )
                );?>


            </div>
        </div>
    </div>

    </div>




<?
//\Extra\Dump::p($arResult);

