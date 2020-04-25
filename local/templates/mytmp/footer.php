<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<? use Bitrix\Main\Page\Asset; ?>

<footer>
    <div class='container'>
        <div class="footer-body">
            <div class="footer-column">
                <a href="" class="footer__logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_w.svg" alt="" /></a>
            </div>
            <div class="footer-column">
                <div class="footer-content">
                    <div class="footer-content-column">
<!--                        Меню футера -->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_menu_template",
                            array(
                                "COMPONENT_TEMPLATE" => "footer_menu_template",
                                "ROOT_MENU_TYPE" => "footermenu1",
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
                    </div>

                    <div class="footer-content-column">

                    <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_menu_template",
                            array(
                                "COMPONENT_TEMPLATE" => "footer_menu_template",
                                "ROOT_MENU_TYPE" => "footermenu2",
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

                    </div>



                    <div class="footer-content-column">
                        <div class="footer-social">


                            <?$APPLICATION->IncludeComponent(
	"bitrix:eshop.socnet.links", 
	"sociatmp", 
	array(
		"FACEBOOK" => "http://googl.com",
		"GOOGLE" => "",
		"INSTAGRAM" => "3",
		"TWITTER" => "",
		"VKONTAKTE" => "2",
		"COMPONENT_TEMPLATE" => "sociatmp"
	),
	false
);?>
                            <!--                    включаемая область для социальных сетей-->
                            <!--                    Выполнил с помощью :main.include только чтобы попробовать. Осталась проблема с классами в ссылках - не подтягивают стили-->
                        </div>
                    </div>


                    <div class="footer-column">
                        <div class="footer-dev">
                            <div class="footer-dev__label">Разработка сайта:</div>
                            <a href="" class="footer-dev__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/dev.svg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>


<div class="popup popup-callback">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="form__title title">Заполните форму<br />и мы перезвоним вам</div>
                <form data-m="m_1" name="callbackform" method="POST" action="#" class="form-body hm">
                    <div class="form-body-row">
                        <div class="form-body-column">
                            <input type="text" name="form_name" data-value="Ваше имя" class="input name" />
                        </div>
                        <div class="form-body-column">
                            <input type="text" name="form_phone" data-value="Ваш телефон" class="input phone req" />
                        </div>
                    </div>
                    <div class="form-body-button">
                        <button type="submit" class="form__btn btn-3">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="popup popup-othersize">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="form__title title">Укажите ваш размер</div>
                <form data-m="m_2" action="#" class="form-body hm">
                    <div class="form-body-row">
                        <div class="form-body-column">
                            <input type="text" name="form[]" data-value="Ваш размер" class="input req" />
                            <div class="form-body__text">Украшения на заказ доставляются примерно через 3 недели после получения оплаты. Подробную информацию можно получить у менеджера после оформления заказа.</div>
                        </div>
                        <div class="form-body-column">
                            <textarea name="form[]" data-value="Комментарий" class="input"></textarea>
                        </div>
                    </div>
                    <div class="form-body-button">
                        <button type="submit" class="form__btn btn-3">Добавить в корзину</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="popup popup-message m_1">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-content">
                <div class="popup-close"></div>
                <div class="popup-message__title title">Спасибо! <br />Мы перезвоним вам <br /> в ближайшее время</div>
                <a href="" class="popup__close btn-3">Ок</a>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-video">
    <div class="popup-table table">
        <div class="cell">
            <div class="popup-close"></div>
            <div class="popup-video__value"></div>
        </div>
    </div>
</div>




<?
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/https://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyAnTDLrncoU26a3S_WQOZQ0G3evEWWR29E");
 Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/https://code.jquery.com/jquery-latest.min.js");               //  библиотеки зи верстки. временно оставил на всякий случай
 Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/https://code.jquery.com/ui/1.12.1/jquery-ui.min.js");         // jq подключил в хэдере из ядра
 Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.inputmask.bundle.min.js");
 Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.nicescroll.min.js");
 Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.popover.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/slick.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/forms.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/castom_form_email.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/add_item_to_basket.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/basket_change_delivery.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/delete_item_in_basket.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/add_item_to_basket.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.ui.touch-punch.min.js");




?>


<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>      
</body>
</html>
