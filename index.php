<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
//$APPLICATION->SetTitle("")

?>

<body class="headpage">
<div class="wrapper">

<div class="mainslider">
	<div class="mainslider-slider">
		<div class="mainslide">
			<div class="mainslide-content">
				<div class="container">
					<div class="mainslide-body">
 <br>
 <br>
						 Ювелирный бутик и мастерская1
						<div class="mainslide__text">
							 Создание украшений на заказ
						</div>
 <a href="" class="mainslide__btn btn-3">Смотреть</a>
					</div>
				</div>
			</div>
			<div class="mainslide__bg ibg">
 <img src="/local/templates/mytmp/img/mainslider/01.jpg" alt="">

			</div>
		</div>
		<div class="mainslide">
			<div class="mainslide-content">
				<div class="container">
					<div class="mainslide-body">
						<div class="mainslide__title">
							 Ювелирный бутик и мастерская2
						</div>
						<div class="mainslide__text">
							 Создание украшений на заказ
						</div>
 <a href="" class="mainslide__btn btn-3">Смотреть</a>
					</div>
				</div>
			</div>
			<div class="mainslide__bg ibg">
 <img src="/local/templates/mytmp/img/mainslider/01.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="mainslider-arrows">
		<div class="container">
		</div>
	</div>
</div>
<div class="mainline">
	<div class="container">
		<div class="mainline__text">
			 100% ЭКСКЛЮЗИВ! СОВРЕМЕННОЕ ОБОРУДОВАНИЕ И НОВЕЙШИЕ ТЕХНОЛОГИИ. СДЕЛАНО В РОССИИ
		</div>
	</div>
</div>


<div class="clients">

    <div class="clients-header">
        <div class="container">
            <div class="clients__title">
                <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/includes/satisfied_clients.php",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
            </div>
        </div>
    </div>

    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"client_rew", 
	array(
		"COMPONENT_TEMPLATE" => "client_rew",
		"IBLOCK_TYPE" => "clients",
		"IBLOCK_ID" => "23",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "UF_*",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

</div>
</div>
</body>


<? require_once ($_SERVER["DOCUMENT_ROOT"].'/includes/subscr.php');?>




<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>