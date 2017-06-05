<?php
class Videos_model extends MY_Model{
	public function __construct(){
		parent::__construct('lyw_u_m_videos');
	}
	public function getVideosList(){
		$sql="SELECT a.title,b.category_name,a.id,a.create_time FROM  lyw_u_m_videos as  a join lyw_u_c_videos_category as b on a.videos_category=b.classid WHERE 1=1;";
		$arr=$this->db->query($sql)->result_array();
		return $arr;
	}
	public function getVideosAll(){
		$sql="SELECT * FROM  lyw_u_m_videos;";
		$arr=$this->db->query($sql)->result_array();
		return $arr;
	}
}