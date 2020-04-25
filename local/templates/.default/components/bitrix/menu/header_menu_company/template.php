<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?// \Extra\Dump::p($arResult); ?>

<?if (!empty($arResult)):?>

        <ul class="header-submenu-list">

            <?
            foreach($arResult as $arItem):
//                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
//                    continue;
            ?>
                <li><a href="<?= $arItem["LINK"] ?> "class="header-submenu__link"><?=$arItem["TEXT"] ?></a></li>
            
            <?endforeach?>

        </ul>

<?endif?>






