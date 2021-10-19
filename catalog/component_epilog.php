<?require($_SERVER['DOCUMENT_ROOT'] . '/setmeta.php');

if ($arMeta[$APPLICATION->GetCurPage(false)]['title'] === '') {
    $APPLICATION->SetTitle('Каталог');
    $APPLICATION->SetPageProperty('title', 'Каталог');
} else {
    $APPLICATION->SetTitle($arMeta[$APPLICATION->GetCurPage(false)]['h1']);
    $APPLICATION->SetPageProperty('title', $arMeta[$APPLICATION->GetCurPage(false)]['title']);
}

if ($APPLICATION->GetCurPage(false) !== '/catalog/' && !empty($arMeta[$APPLICATION->GetCurPage(false)]['h1'])) {
    $APPLICATION->AddChainItem($arMeta[$APPLICATION->GetCurPage(false)]['h1']);
}

$APPLICATION->SetPageProperty('description', $arMeta[$APPLICATION->GetCurPage(false)]['description']);
$APPLICATION->SetPageProperty('keywords', $arMeta[$APPLICATION->GetCurPage(false)]['keywords']);
?>
