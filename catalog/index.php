<?
# Header

#
# Catalog code
#
if ($arMeta[$APPLICATION->GetCurPage(false)]['title'] == '') {
    $APPLICATION->SetTitle('Каталог интернет-магазина');
} else {
    $APPLICATION->SetTitle($arMeta[$APPLICATION->GetCurPage(false)]['h1']);
    $APPLICATION->SetPageProperty('title', $arMeta[$APPLICATION->GetCurPage(false)]['title']);
}

$APPLICATION->SetPageProperty('description', $arMeta[$APPLICATION->GetCurPage(false)]['description']);
$APPLICATION->SetPageProperty('keywords', $arMeta[$APPLICATION->GetCurPage(false)]['keywords']);

# Footer
?>
