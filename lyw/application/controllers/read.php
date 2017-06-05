<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Read extends CI_Controller {
	private $siteData=array();
	private $tableName;
// 	private $tableName_videos;
	public function __construct(){
		parent::__construct();
		//连接数据库
		$this->db = $this->load->database ( "default", TRUE );
		//读取dilicms的配置属性
		$this->siteData = $this->db->get($this->db->dbprefix('site_settings'))->row_array();
		$this->tableName=$this->db->dbprefix('u_m_contents');	
	}

	public function index(){
		$_id=$this->input->get("id");
		$_id=(is_numeric($_id))?$_id:1;
		$_id=($_id<=0)?1:$_id;
		$resData=$this->__getContentData($_id);
		$this->pageData["db"]=$resData;
		$this->pageData["title"]=$resData["title"];
		$this->load->view('content',$this->pageData);
	}
	//读取新闻具体数据（内容页）
	private function __getContentData($_id){
		$whereCondition="where id  ={$_id}";
		$sql="select * from {$this->tableName}  {$whereCondition}";
		$resData=$this->db->query($sql)->row_array();
		return $resData;
	}
}