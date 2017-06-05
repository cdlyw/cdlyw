<?php
class Set_model extends MY_Model{
	public function __construct(){
		parent::__construct('lyw_site_settings');
	}
	public function getSiteInfo(){
		$where=array();
		$siteArr=$this->row($where);
		return $siteArr;
	}
}