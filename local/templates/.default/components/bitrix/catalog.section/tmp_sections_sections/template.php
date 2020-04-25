<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

?>

    <div class="catalog-items-block">
<?

?>
            <?foreach ($arResult['ITEMS'] as $arItem){?>
                <div class="catalog-item ">
                    <div class="catalog-item-content">
                        <a href="" class="catalog-item-content__image ibg" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC']?>');" ><img src="<?= $arItem['PREVIEW_PICTURE']['SRC']?>" alt="" /></a>
                        <a href="" class="catalog-item-content__text">
                            <span><?= $arItem['PREVIEW_TEXT']?></span>
                            <span><?= $arItem['PRICES']['PRICE_ROZN']['PRINT_VALUE'];?></span>
                        </a>
                    </div>
                    <a href="<?= $arItem['DETAIL_PAGE_URL'];?>" class="catalog-item-hover">
                        <span class="catalog-item-hover__btn btn-4">Смотреть</span>
                    </a>
                </div>
            <?}?>

        background-image: url("/upload/iblock/39f/39fa7eceed0de0669cf409b5fc4caa7c.png");

    </div>




