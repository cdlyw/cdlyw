<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');
$setting['cate_models']['category']=array (
  'id' => '2',
  'name' => 'category',
  'description' => '导航名称',
  'perpage' => '20',
  'level' => '2',
  'hasattach' => '0',
  'built_in' => '0',
  'auto_update' => '1',
  'thumb_preferences' => NULL,
  'fields' => 
  array (
    2 => 
    array (
      'id' => '2',
      'name' => 'category_name',
      'description' => '导航名称',
      'model' => '2',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '0',
      'height' => '0',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '2',
  ),
  'searchable' => 
  array (
    0 => '2',
  ),
);