<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="clients-items">
    <?foreach($arResult["ITEMS"] as $arItem):?>

        <div class="clients-item">
            <div class="clients-item__bg ibg"><img src="<?echo $arItem['PREVIEW_PICTURE']['SRC']?>" alt="" /></div>
            <div class="clients-item-content">

                <div class="clients-item-content__title"> <?echo $arItem['NAME']?></div>
                <div class="clients-item-content__text">

                    <p><? echo $arItem['PREVIEW_TEXT']?></p>
                    <p><? echo $arItem["PROPERTIES"]['NAME']['VALUE']?><br /><? echo $arItem["PROPERTIES"]['DATE']['VALUE'] ?></p>

                    <?if($arItem["PROPERTIES"]['LINK']['VALUE']){?>
                        <a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>" target="_blank" class="clients-item-content__btn btn-4">Хочу быть здесь</a>
                    <?}?>

                </div>
            </div>
        </div>

    <?endforeach;?>
</div>






