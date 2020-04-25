<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<pre><?print_r($arResult);?></pre>
<?if (!empty($arResult)):
    foreach($arResult as $arItem):
        ?>
        <li><a href="<?= $arItem["LINK"] ?> "class="header-submenu__link"><?=$arItem["TEXT"] ?></a></li>
    <?endforeach?>
<?endif?>
