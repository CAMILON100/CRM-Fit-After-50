<?php 
 $GLOBALS["dictionary"]["AOW_Processed"]=array (
  'table' => 'aow_processed',
  'audited' => false,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'aow_processed_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'aow_processed_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'aow_workflow_id' => 
    array (
      'required' => false,
      'name' => 'aow_workflow_id',
      'vname' => 'LBL_AOW_WORKFLOW_ID',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'aow_workflow' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'aow_workflow',
      'vname' => 'LBL_AOW_WORKFLOW',
      'type' => 'relate',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'aow_workflow_id',
      'ext2' => 'AOW_WorkFlow',
      'module' => 'AOW_WorkFlow',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'parent_id' => 
    array (
      'required' => false,
      'name' => 'parent_id',
      'vname' => 'LBL_BEAN_ID',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'group' => 'bean',
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'parent_type' => 'record_type_display',
      'type_name' => 'bean_module',
      'id_name' => 'bean_id',
      'vname' => 'LBL_BEAN',
      'type' => 'parent',
      'group' => 'parent_name',
      'source' => 'non-db',
      'options' => 'moduleList',
    ),
    'parent_type' => 
    array (
      'required' => false,
      'name' => 'parent_type',
      'vname' => 'LBL_MODULE',
      'type' => 'parent_type',
      'dbType' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'group' => 'bean',
      'options' => 'moduleList',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'status' => 
    array (
      'required' => false,
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Pending',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'aow_process_status_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'aow_actions' => 
    array (
      'name' => 'aow_actions',
      'type' => 'link',
      'relationship' => 'aow_processed_aow_actions',
      'module' => 'AOW_Actions',
      'bean_name' => 'AOW_Action',
      'source' => 'non-db',
    ),
  ),
  'relationships' => 
  array (
    'aow_processed_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOW_Processed',
      'rhs_table' => 'aow_processed',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'aow_processed_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOW_Processed',
      'rhs_table' => 'aow_processed',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'aow_processedpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'aow_processed_index_workflow',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aow_workflow_id',
        1 => 'status',
        2 => 'parent_id',
        3 => 'deleted',
      ),
    ),
    1 => 
    array (
      'name' => 'aow_processed_index_status',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
      ),
    ),
    2 => 
    array (
      'name' => 'aow_processed_index_workflow_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aow_workflow_id',
      ),
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'templates' => 
  array (
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);