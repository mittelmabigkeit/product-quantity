<?require($_SERVER["DOCUMENT_ROOT"]. "/bitrix/header.php");

CModule::IncludeModule('iblock');
Cmodule::IncludeModule('catalog');

$arFilter = array(
    'IBLOCK_ID' => 83,
);

$res = CIBlockElement::GetList(false, $arFilter, array('IBLOCK_ID','ID'));

while($el = $res->GetNext()):
    $arElementsID[] = $el['ID'];
endwhile;

foreach($arElementsID as $key):
    $ELEMENT_ID = $key;
    $arFields = array('QUANTITY' => 999);
    CCatalogProduct::Update($ELEMENT_ID , $arFields);
endforeach;

require($_SERVER["DOCUMENT_ROOT"]. "/bitrix/footer.php");?>