<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<!--<pre>-->
<!--    --><?//print_r($arResult);?>
<!--</pre>-->

<?

/** @var array $arResult */


if (empty($arResult))
    return "";

$strReturn = '<div class="breadcrumbs-body">';

$itemSize = count($arResult);

foreach ($arResult as $index => $item) {

    $title = $item['TITLE'];

    if($index < ($itemSize-1)){

        $strReturn .= '
           <a href="' . $arResult[$index]["LINK"] . '" class="breadcrumbs__link">' . $title .'</a>
           <span class="breadcrumbs__sepp">|</span>
          ';
    }else {

        $strReturn .='<span>' . $title . '</span>';
    }

}
$strReturn .= '</div>';
return $strReturn;















