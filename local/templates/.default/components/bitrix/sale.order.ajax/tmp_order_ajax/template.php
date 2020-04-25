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
<!--<pre>--><?//print_r($arResult);?><!--</pre>-->
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


<div class="cart">
    <div class="container">


<div class="cart-tabs">
					<a href="http://karpinchik.fortest.org/personal/order/make/index.php" class="cart-tabs__item active">Корзина</a>
					<a href="http://karpinchik.fortest.org/personal/order/make/checkout.php" class="cart-tabs__item">Оформление заказа</a>
				</div>
				<div class="cart-content">


					<div class="cart-body">
						<div class="cart-items">

                            <?foreach($arResult['BASKET_ITEMS'] as $arItem):?>
                                <div class="cart-item">
                                    <div class="cart-item-product">
                                        <a href="" class="cart-item-product__image"><img src="<?= $arItem['PREVIEW_PICTURE_SRC'];?>" alt="" /></a>
                                        <div class="cart-item-product-body">
                                            <a href="" class="cart-item-product__title"> <?= $arItem['NAME'];?> </a>
                                            <div class="cart-item-product__label">Коллекция <?= $arResult[$arItem['PRODUCT_ID']][1];?> </div>

                                            <div class="cart-item-product__option"><strong>Камень:</strong>  <?= $arResult[$arItem['PRODUCT_ID']][8];?> </div>
                                        </div>
                                    </div>
                                    <div class="cart-item__price"><?= $arItem['PRICE_FORMATED'];?></div>
                                    <a href="" id='<?= $arItem['ID'];?>' class="cart-item__delete fa fa-times"></a>
                                </div>
                            <?endforeach;?>
                            "?basket-del='+<?= $arItem['ID'];?>+'"
						</div>
					</div>

					<div class="cart-info">
						<div class="cart-info-table table">
							<div class="trow">
								<div class="cell">
									<div class="cart-info__label">Товаров</div>
								</div>
								<div class="cell">
									<div id='count_info_items_val' class="cart-info__value"><?= $arResult['COUNT_ITEMS']?></div>
								</div>
							</div>
							<div class="trow">
								<div class="cell">
									<div class="cart-info__label">На сумму</div>
								</div>
								<div class="cell">
									<div  id="price_order_total_total" class="cart-info__value"><?= $arResult['ORDER_PRICE_FORMATED'];?></div>
								</div>
							</div>
							<div id='show_delivery_info' class="trow">
								<div class="cell">
									<div class="cart-info__label">Доставка</div>
								</div>
								<div class="cell">
									<div id="cart-info-value" class="cart-info__value">
										<span id="show-data-price" ><?= $arResult['JS_DATA']['TOTAL']['DELIVERY_PRICE_FORMATED'];?></span> 0 ₽
									</div>
								</div>
							</div>
						</div>


						<div class="cart-info-total">
							<div class="cart-info-total__label">Всего к оплате</div>

                                <div id='total_price' class="cart-info-total__value"><?= $arResult['ORDER_TOTAL_PRICE_FORMATED'];?></div>
                                <div id='total_price' class="cart-info-total__value"></div>

						</div>
					</div>
				</div>
				<div class="cart-actions">
					<div id='cart-actions-delivery-one' class="cart-actions-column">
						<div  class="cart-actions-delivery">
							<div class="cart-actions-delivery__label">Доставка</div>
							<select name="form[]"  class="cart-actions-delivery">


                                <?foreach ($arResult['DELIVERY'] as $arDelivery):?>
                                        <option data-num="<?= $arDelivery['ID'];?>" class="change_delivery"><?= $arDelivery['NAME'];?></option>
                                <?endforeach;?>

							</select>
						</div>
						<div class="cart-actions-footer">
							<div id='cart-actions-with-delivery' class="cart-actions__info">При покупке на 20 000 рублей и более — бесплатная доставка по Москве!</div>
						</div>
					</div>
					<div class="cart-actions-column">
						<a href="http://karpinchik.fortest.org/personal/order/make/checkout.php" class="cart-actions__btn btn-3 min">Далее</a>
					</div>

				</div>

    </div>
</div>
<? require_once ($_SERVER["DOCUMENT_ROOT"].'/includes/subscr.php');?>

<?
//\Extra\Dump::p($arResult);

