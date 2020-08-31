<?php
$module_name = 'In_12_Inventory';
$OBJECT_NAME = 'IN_12_INVENTORY';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_SALE_NAME',
    'link' => true,
    'default' => true,
  ),
  'PRODUCT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'QUANTITY_TOTAL_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_QUANTITY_TOTAL',
    'width' => '10%',
  ),
  'SOLD_PRODUCTS_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_SOLD_PRODUCTS',
    'width' => '10%',
  ),
  'REMAINING_PRODUCTS_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ REMAINING_PRODUCTS',
    'width' => '10%',
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT',
    'align' => 'right',
    'default' => true,
    'currency_format' => true,
  ),
);
;
?>
