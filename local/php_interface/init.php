<?
//
//AddEventHandler("currency", "CurrencyFormat", "myFormat");       // зарегестрировал обработчик
//
//function myFormat($fSum, $strCurrency)                      // функция для обработки формата цены
//{
//   return number_format ( $fSum, 0, '', ' ' ).' &#8381';   // выводим цену без точки, с разделителем
//    // в виде пробела и сразу добавляем символ рос рубля
//}

include_once ($_SERVER["DOCUMENT_ROOT"] . '/includes/currency_format_price.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/includes/pop_up_order_ok.php');
include_once ($_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php');             //\Extra\Dump::p($arResult);

















