<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');
$setting['cate_models']['videos_category']=array (
  'id' => '5',
  'name' => 'videos_category',
  'description' => '视频',
  'perpage' => '20',
  'level' => '1',
  'hasattach' => '0',
  'built_in' => '0',
  'auto_update' => '1',
  'thumb_preferences' => NULL,
  'fields' => 
  array (
    6 => 
    array (
      'id' => '6',
      'name' => 'category_name',
      'description' => '视频名称',
      'model' => '5',
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
    0 => '6',
  ),
  'searchable' => 
  array (
    0 => '6',
  ),
);