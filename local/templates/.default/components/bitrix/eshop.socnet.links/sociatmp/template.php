<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<?if (!empty($arResult)):?>
    <div class="header-submenu-list">

            <?foreach($arResult["SOCSERV"] as $socserv):?>
                <a class="header-submenu-social__item fa fa-<?=$socserv["CLASS"]?> " href="<?=$socserv["LINK"]?>"></a>
            <?endforeach?>
    </div>


<?endif?>





