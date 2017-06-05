<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Read_videos extends CI_Controller {
	private $siteData=array();
	private $tableName_videos;
	public function __construct(){
		parent::__construct();
		//连接数据库
		$this->db = $this->load->database ( "default", TRUE );
		//读取dilicms的配置属性
		$this->siteData = $this->db->get($this->db->dbprefix('site_settings'))->row_array();
		$this->tableName_videos=$this->db->dbprefix('u_m_videos');
	
	}

	public function index(){
		$_id=$this->input->get("id");
		$_id=(is_numeric($_id))?$_id:1;
		$_id=($_id<=0)?1:$_id;
		$resData_videos=$this->__getContentData_videos($_id);
		$this->pageData["db"]=$resData_videos;
		$this->pageData["title"]=$resData_videos["title"];
		$this->load->view('content_videos',$this->pageData);
	}

	private function __getContentData_videos($_id){
		$whereCondition="where id  ={$_id}";
		$sql="select * from {$this->tableName_videos}  {$whereCondition}";
		$resData_videos=$this->db->query($sql)->row_array();
		return $resData_videos;
	}
	
	
}