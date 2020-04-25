<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<?$APPLICATION->ShowHead();?>


<? use Bitrix\Main\Page\Asset; ?>

<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css"); ?>



<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/custom.css"); ?>
<? Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0" />'); ?>
<pre><?print_r($arResult);?></pre>


<?CJSCore::Init(array('jquery'));?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
<!--    --><?//$APPLICATION->ShowPageProperty();?>
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="favicon.ico">


</head>
<body class="headpage">
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>

<div class="wrapper">
    <header>
        <div class="header-body">
            <div class="container">
                <a href="" class="header__logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" /></a>
                <div class="header-body-top">
                    <div class="header-body-top-column">
                        <ul class="header-body-menu">
<!--                            <li><a href="" class="header-body-menu__link">Где купить?</a></li>-->
                            <li><a href="/textpage.html" class="header-body-menu__link">Доставка и оплата</a></li>
                        </ul>
                    </div>
                    <div class="header-body-top-column">
                        <ul class="header-body-menu">
                            <li><a href="/textpage.html" class="header-body-menu__link">О нас</a></li>
<!--                            <li><a href="/personal/order/make/index.php" class="header-body-menu__cart">Корзина <span><i>10</i></span></a></li>-->


                            <?CModule::IncludeModule("sale");
                            $count =0;
                            $dbBasketItems = CSaleBasket::GetList(false, array("FUSER_ID" => CSaleBasket::GetBasketUserID(),
                                "LID" => SITE_ID, "ORDER_ID" => "NULL", "DELAY" => "N"), false, false, array("ID","QUANTITY", "PRICE"));
                            while ($arItems = $dbBasketItems->Fetch())
                                $count   +=   $arItems['QUANTITY'];
                            ?>
                            <li><a href="/personal/order/make/index.php" class="header-body-menu__cart">Корзина <span><i id="Baloon"><?=$count?></i></span></a></li>


                            <li>
                                <div class="header-body-lang">
                                    <div class="header-body-lang__title">RU</div>
                                    <div class="header-body-lang-box">
<!--                                        <a href="" class="header-body-lang__item">RU</a>-->
<!--                                        <a href="" class="header-body-lang__item">EN</a>-->
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-body-bottom">

                    <div class="header-body-bottom-column">
                        <div class="header-body-contacts">
                            <a href="tel:+79251189581" class="header-body-contacts__phone">+7 925 118 95 81</a>
                            

                            <a href="" class="header-body-contacts__callback btn pl callback">Перезвонить</a>

                        </div>
                    </div>
                    <div class="header-body-bottom-column">
                        <div class="header-body-buttons">
<!--                            <a href="" class="header-body-buttons__item btn-2">Изделия на заказ</a>-->
<!--                            <a href="" class="header-body-buttons__item btn-2">Ремонт украшений</a>-->
                        </div>
                    </div>
                </div>
                <div class="header-menu__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="header-bottom">

            <div class='container'>
                <div class="header-menu">

<!--Подключил компонент catalog.section.list для вывода верхнего меню -->

                    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"tmp_top_menu", 
	array(
		"COMPONENT_TEMPLATE" => "tmp_top_menu",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "27",
		"SECTION_ID" => $_REQUEST["SECTION_CODE"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "1",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "UF_*",
			2 => "",
		),
		"FILTER_NAME" => "sectionsFilter",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"CACHE_FILTER" => "N",
		"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?>

                </div>
            </div>
            <div class="header-submenu">
                <div class='container'>
                    <div class="header-submenu-body">

                        <div class="header-submenu-column">
                            <div class="header-submenu__label">Коллекции</div>
                            <ul class="header-submenu-list">
                                <li><a href="" class="header-submenu__link">Коллекция 1</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 2</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 3</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 4</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 5</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 6</a></li>
                                <li><a href="" class="header-submenu__link">Коллекция 7</a></li>
                            </ul>
                        </div>
                        <div class="header-submenu-column">
                            <div class="header-submenu__label">Каталог</div>
                            <ul class="header-submenu-list">


                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "menu_section_catalog",
                                    Array(),
                                    false
                                );?>


                            </ul>
                        </div>
                        <div class="header-submenu-column">
                            <div class="header-submenu__label">Компания</div>

<!--        Компонент для вывода меню "Компания" в пункте меню "ещё"            -->

                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "header_menu_company",
                                array(
                                    "COMPONENT_TEMPLATE" => "header_menu_company",
                                    "ROOT_MENU_TYPE" => "header_menu_companu",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>


<!--меню социальные ссылки-->
                            <div class="header-submenu-social">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:eshop.socnet.links",
                                    "sociatmp",
                                    array(
                                        "FACEBOOK" => "/",
                                        "GOOGLE" => "",
                                        "INSTAGRAM" => "/",
                                        "TWITTER" => "",
                                        "VKONTAKTE" => "/",
                                        "COMPONENT_TEMPLATE" => "sociatmp"
                                    ),
                                    false
                                );?>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>





