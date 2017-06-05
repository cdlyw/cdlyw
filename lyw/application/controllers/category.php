<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
	private $pageData=array();
	private $siteData=array();
	private $categoryName;
	private $tableName;
	private $categoryTableName;
	private $pageSize=10;
	public function __construct(){
		parent::__construct();
		//连接数据库
		$this->db = $this->load->database ( "default", TRUE );
		//读取dilicms的配置属性
		$this->siteData = $this->db->get($this->db->dbprefix('site_settings'))->row_array();
		$this->tableName=$this->db->dbprefix('u_m_contents');
		$this->categoryTableName=$this->db->dbprefix('u_c_category');
	}	
	public function index($_page=1){
		$id=$this->input->get("id");
		if(!is_numeric($id)){
			exit ("参数非法");
		}
		$this->categoryName=$this->__getCategoryName($id);
		if($this->categoryName==-1){
			exit( "该栏目不存在！");
		}
		else{
			$pagesArr=$this->__getPagesData(0,$_page);
			$resData=$this->__getListData($id,$pagesArr["pageMax"],$pagesArr["pageSize"]);
			$this->pageData["currentList"]=$resData;
			$this->pageData["title"]=$this->categoryName;
			$this->pageData["pagesArr"]=$pagesArr;
			switch ($id){
				case 1:$this->load->view('index',$this->pageData);break;
				case 2:$this->load->view('china_culture',$this->pageData);break;
				case 3:$this->load->view('scenery_introduction',$this->pageData);break;
				case 4:$this->load->view('travel_strategy',$this->pageData);break;
				case 5:$this->load->view('customize',$this->pageData);break;
				case 6:$this->load->view('travel_notes',$this->pageData);break;
			}
		}
	}
	//获取栏目名称
	private function __getCategoryName($_id){
		$whereCondition="where classid  = {$_id}";
		$sql="select category_name from {$this->categoryTableName}  {$whereCondition}";
		$resData=$this->db->query($sql)->row_array();
		$categoryName=(sizeof($resData)==0)?-1:$resData["category_name"];
		return $categoryName;
	}
	//分页数据
	private function __getPagesData($_id,$_page){
		$whereCondition="where ";
		$whereCondition.=($_id!=0)?("category={$_id}"):("1=1");
		$sql="select count(id) as pageMaxSize from {$this->tableName} {$whereCondition}";
		$resData=$this->db->query($sql)->row_array();
		$pageMaxSize=$resData["pageMaxSize"];
		$pageSize=$this->pageSize;
		$pages=ceil($pageMaxSize / $pageSize);
		$pageMax=($_page-1)*$pageSize;
		$pagesArr=array(
				"pageSize"=>$pageSize,//每页多少条记录
				"pages"=>$pages,//共多少页
				"page"=>$_page,//当前页数
				"pageMax"=>$pageMax//查询的起始索引
		);
		return $pagesArr;
	}
	//获取当前栏目的新闻列表
	private function __getListData($_id,$_pageMax,$_pageSize){
		$whereCondition="where ";
		$whereCondition.=($_id!=0)?("category={$_id}"):("1=1");
		$sql="select id,title,create_time from {$this->tableName} {$whereCondition}";
		$sql.=" order by ontop desc , id desc limit {$_pageMax},{$_pageSize}";
		$resData=$this->db->query($sql)->result_array();
		return $resData;
	}
}
