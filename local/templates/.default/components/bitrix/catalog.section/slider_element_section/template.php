<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
?>

<!--<pre>--><?//print_r($arResult);?><!--</pre>-->

<?//  Включаемая область для названия слайдера с рекомендуемыми товарами?>

    <div class="catalog-slider__title title cnt">
        <?
            $APPLICATION->IncludeFile(
                '/includes/recomented_slider.php',
                Array(),
                Array("MODE" => "html", "NAME" => "Название для слайдера с рекомендациями")
            );
        ?>
    </div>


<div class="product-slider-body">
    <?foreach($arResult["ITEMS"] as $arItem):?>

        <div class="catalog-slide">
            <div class="catalog-item white_1">
                <div class="catalog-item-content">
                    <a href="" class="catalog-item-content__image ibg"><img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="" /></a>
                    <a href="" class="catalog-item-content__text">
                        <span><?=$arItem['NAME']?></span>

                        <span><?= $arItem['PRICES']['PRICE_ROZN']['PRINT_VALUE_VAT']?></span>
                    </a>
                </div>
                <a href="<?= $arItem['DETAIL_PAGE_URL'];?>" class="catalog-item-hover">
                    <span class="catalog-item-hover__btn btn-4">Смотреть</span>
                </a>
            </div>
        </div>

    <?endforeach;?>
</div>
