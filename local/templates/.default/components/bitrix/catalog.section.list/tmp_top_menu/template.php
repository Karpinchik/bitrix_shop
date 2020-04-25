<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (0 < $arResult["SECTIONS_COUNT"]):?>
    <div class="header-menu">
         <ul class="header-menu-list">

             <li><a href="/vse-kollektsii/index.php"class="header-menu__link">Все коллекции</a></li>

                 <?
                              foreach($arResult["MENU_TOP"] as $arItem):
                                     if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                                         continue;
                              ?>

                    <li><a href="<?=$arItem["SECTION_PAGE_URL"]?>"class="header-menu__link"><?=$arItem["NAME"]?></a></li>

                 <?endforeach?>

             <li><span class="header-menu-more">Ещё <span class="header-menu-more__icon"><span></span><span></span><span></span></span></span></li>

         </ul>

    </div>
<?endif?>


<?// \Extra\Dump::p($arResult); ?>

