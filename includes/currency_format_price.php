<?

AddEventHandler("currency", "CurrencyFormat", "myFormat");       // зарегестрировал обработчик

function myFormat($fSum, $strCurrency)                      // функция для обработки формата цены
{
//    return number_format ( $fSum, 0, '', ' ' ).' &#8381';   // выводим цену без точки, с разделителем
    return number_format ( $fSum, 0, '', ' ' ).' ₽';   // выводим цену без точки, с разделителем
    // в виде пробела и сразу добавляем символ рос рубля
}
