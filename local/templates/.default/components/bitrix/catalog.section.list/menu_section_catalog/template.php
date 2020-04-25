<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):
    foreach($arResult['SECTIONS'] as $arItem): ?>
        <li><a href="<?= $arItem['SECTION_PAGE_URL'];?>" class="header-submenu__link"><?= $arItem['NAME'];?></a></li>
    <?endforeach?>
<?endif?>
