    <? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
    // получаю данные из rquests и отправляю в стандартный метод добавления в карзину
    use Bitrix\Main\Context,
        Bitrix\Sale,
        Bitrix\Currency\CurrencyManager,
        Bitrix\Sale\Order,
        Bitrix\Sale\Basket,
        Bitrix\Sale\Delivery,
        Bitrix\Sale\PaySystem,
        Bitrix\Main\Type,
        Bitrix\Main\IO,
        Bitrix\Main\Text,
        Bitrix\Main\Result;

    global $USER;

    Bitrix\Main\Loader::includeModule("sale");
    Bitrix\Main\Loader::includeModule("catalog");
    Bitrix\Main\Loader::includeModule("main");

    $request = Context::getCurrent()->getRequest();
    $productId = $request["ID_item"];               // получил ID товара

    $fields = [
        'PRODUCT_ID' => $productId,
        'QUANTITY' => 1,
        'PROPS' => [
        ],
    ];

    $r = \Bitrix\Catalog\Product\Basket::addProduct($fields);

    if (!$r->isSuccess()) {
        var_dump($r->getErrorMessages());
        $arResult['status'] = 'error';
        $arResult['error'] = $r->getErrorMessages();
    } else {
        $arResult['status'] = 'ok';
    }
    
    echo json_encode($arResult);
    ?>


