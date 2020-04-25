<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

            <div class="filter">
                <div class="filter-body">
                    <div class="filter-modules">
                        <div class="filter-module">
                            <div class="filter__label">Категории</div>
                            <ul class="filter-menu">
                                <?foreach($arResult['SECTIONS'] as $arItem): ?>
                                    <li><a href="<?= $arItem['SECTION_PAGE_URL'];?>" class="filter-menu__link"><?= $arItem['NAME'];?></a></li>
                                <?endforeach?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<?
\Extra\Dump::p($arResult);