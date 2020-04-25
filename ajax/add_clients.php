<? require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');?>
<? use Bitrix\Main\Mail\Event; ?>
<?

    $phone_input = $_POST['phone'];
    $res = preg_match('/^(\+)?(\(\d{2,3}\) ?\d|\d)(([ \-]?\d)|( ?\(\d{2,3}\) ?)){5,12}\d$/',$phone_input);          // валидация номера телефона

    if($res){              // если валидация прошла то добавляем элемент инфоблока

        CModule::includeModule('iblock');
        $el = new CIBlockElement;
        $iblock_id = 20;

        $PROP = array();
        $PROP[1] = Array(
            "n0" => Array(
                "VALUE" => $_POST['name'],
                "DESCRIPTION" => "description"),
        );
        $PROP[2] = Array(
            "n0" => Array(
                "VALUE" => $phone_input,
                "DESCRIPTION" => "description"),
        );

        $arFields = array(
            "IBLOCK_ID" => $iblock_id,
            "IBLOCK_SECTION_ID" => false,
            "NAME" => $_POST['name'],
            "PROPERTY_VALUES" => $PROP,
        );

        if($PRODUCT_ID = $el->Add($arFields)){
            $arResult['status'] = 'ok';
        }
        else{
            $arResult['status'] = 'error';
            $arResult['error'] = $el->LAST_ERROR;
        }

        $result = Event::send(array(
            "EVENT_NAME" => "WF_NEW_IBLOCK_ELEMENT",
            "LID" => "s1",
            "C_FIELDS" => array(
                "EMAIL" => "sergei.k@phpdev.org",
                "USER_ID" => 42
            ),
        ));
    }
    else{
        $arResult['status'] = 'error';
        $arResult['error'] = "Выеден неправильный формат телефона";
    }

echo json_encode($arResult);