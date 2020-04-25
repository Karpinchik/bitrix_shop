<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */


$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();


//  загружаю в отдельный блок все картинки элемента (свойство). Получаю их пути через метод GetPath
foreach($arResult['PROPERTIES']['PICTURES']['VALUE'] as &$arItem)
{
    $arResult['PICTURE_ID'][] = CFile::GetPath($arItem);
}






