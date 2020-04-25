<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
?>
<!--<pre>--><?//print_r($arResult);?><!--</pre>-->
    <div class="product-main">
        <div class="product-main-images">

            <div class="product-main-mainimages row">
                <?foreach($arResult['PICTURE_ID'] as $pictureID):?>
                    <div class="product-main-mainimage">
                        <a rel="position:'right',adjustX:25,adjustY:0,Width: 432" href="<?= $pictureID ?>" class="cloud-zoom product-main-mainimage__item">
                            <img class="cloudzoom-gallery" src="<?= $pictureID ?>" alt="" />
                        </a>
                    </div>
                <?endforeach?>
            </div>


            <div class="product-main-subimages">
                <?foreach($arResult['PICTURE_ID'] as $pictureID):?>
                    <div class="product-main-subimage">
                        <div class="product-main-subimage__item ibg"><img src="<?= $pictureID ?>" alt="" /></div>
                    </div>
                <?endforeach?>
            </div>

        </div>


        <div class="product-main-info">
            <div><?print_r($_REQUEST);?></div>
            <div class="product-main-info__title"><?=$arResult['NAME']?></div>
            <div class="product-main-info__price"><?=$arResult['PRICES']['PRICE_ROZN']['PRINT_VALUE_NOVAT']?></div>
            <div class="product-main-info-options">
                <p><strong><?=$arResult['PROPERTIES']['MODEL']['NAME']?>: </strong><?= $arResult['PROPERTIES']['MODEL']['VALUE']?></p>
                <?if($arResult['PROPERTIES']['ROCK']['VALUE']):?>
                    <p><strong><?=$arResult['PROPERTIES']['ROCK']['NAME']?>: </strong> <?= $arResult['PROPERTIES']['ROCK']['VALUE']?></p>
                <?endif?>
            </div>
                <?//добавил пользовательский атрибут с id товара для отправки его в ajax?>
            <?if($arResult['PROPERTIES']['QUANTITY']['VALUE'] >= 1 ):?>
                <a href="" data-id-product="<?=$arResult['EXTERNAL_ID']?>" id="id_item_basket" class="product-main-info__cart pl incart min btn-3"><?=$arResult['ORIGINAL_PARAMETERS']['MESS_BTN_ADD_TO_BASKET']?></a>
            <?endif?>
        </div>
    </div>


    <div class="product-info">

        <div class="product-info-table table">
            <div class="trow">
                <div class="cell">
                    <div class="product-info__label"><?=$arResult['PROPERTIES']['METAL']['NAME']?>:</div>
                </div>
                <div class="cell">
                    <div class="product-info__value"><?=$arResult['PROPERTIES']['METAL']['VALUE']?></div>
                </div>
            </div>
            <div class="trow">
                <div class="cell">
                    <div class="product-info__label"><?=$arResult['ORIGINAL_PARAMETERS']['MESS_PROPERTIES_TAB']?>:</div>
                </div>
                <div class="cell">
                    <div class="product-info__value"><?=$arResult['PREVIEW_TEXT']?></div>
                </div>
            </div>
        </div>

        <div class="product-info-description">
            <div class="product-info__title"><?=$arResult['ORIGINAL_PARAMETERS']['MESS_DESCRIPTION_TAB']?></div>
            <div class="product-info__text"><?=$arResult['DETAIL_TEXT']?></div>
        </div>
    </div>


<div class="popup popup-incart m_2">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="form__title title">Товар добавлен в корзину</div>
                <div class="popup-incart-body">
                    <div class="popup-incart__image"><img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="" /></div>
                    <div class="popup-incart__name"><?=$arResult['NAME']?></div>
                    <div class="popup-incart-buttons">
                        <a href="<?= $arResult['ORIGINAL_PARAMETERS']['DETAIL_URL']?>" class="popup-incart-buttons__btn btn-5 popup__close">Продолжить покупки</a>
                        <a href="<?= $arResult['ORIGINAL_PARAMETERS']['BASKET_URL']?>" class="popup-incart-buttons__btn btn-3">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/cloudzoom/cloud-zoom.js");?>















