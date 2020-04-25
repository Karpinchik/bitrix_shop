<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?// \Extra\Dump::p($arResult); ?>

<?if (!empty($arResult)):?>
    <div class="footer-content-column">
        <ul class="footer-menu">

            <?
            foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
            ?>
                <li><a href="<?=$arItem["LINK"]?>"class="footer-menu__link"><?=$arItem["TEXT"]?></a></li>
            <?endforeach?>

        </ul>
    </div>
<?endif?>


