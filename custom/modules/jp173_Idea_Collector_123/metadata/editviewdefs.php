<?php
$module_name = 'jp173_Idea_Collector_123';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'targets',
            'studio' => 'visible',
            'label' => 'LBL_TARGETS',
          ),
          1 => 
          array (
            'name' => 'opportunities',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITIES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'activities',
            'studio' => 'visible',
            'label' => 'LBL_ACTIVITIES',
          ),
          1 => 
          array (
            'name' => 'reference',
            'studio' => 'visible',
            'label' => 'LBL_REFERENCE',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
