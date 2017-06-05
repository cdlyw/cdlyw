<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/index.css" />
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/chana_culture.css" />
	<style type="text/css">
     body { background:#fff; padding:20px;}
     
    </style>
	</head>
	<body>
		<!--公共头部-->
		<?php $this->load->view('inc_top')?>
		
		
		<div class="cul_dep"><!--陶瓷文化与发展-->
			<p>陶瓷</p>
			<div class="section">
				<h4>历史发展</h4><br />
				<?php 
				$tmpCode=""; 
						if(sizeof($currentList)!=0){
							foreach ($currentList as $key=>$value){
								$tmpCode.='<li>&middot;<a target="blank" href="'.base_url("read/?id=".$currentList[$key]["id"]).'">'.$currentList[$key]["title"].'</a><span>'.date("Y-m-d",$currentList[$key]["create_time"]).'</span></li>';
							}
						}
						else{
							$tmpCode='<li>&middot;<a href="#">暂无数据</a><span>'.date("Y-m-d").'</span></li>';
						}
						echo $tmpCode;
				?>
				
			</div>
			
			<div class="section">
				<h4>文化传统</h4><br />
				dsagklgbllasdglnafsbn...
				
			</div>
			
			<div class="section">
				<h4>陶瓷饰品</h4><br />
				dsagklgbllasdglnafsbn...
				
			</div>
		</div>
		  
		  
		<div class="famous_teachers"><!--知名教师-->
			<div class="title"><p>知名教师</p></div>
			<div class="t_pic"><img src="#"><a href="#">xxx</a></div>
			<div class="t_pic"><img src="#"><a href="#">xxx</a></div>
			<div class="t_pic"><img src="#"><a href="#">xxx</a></div>
			<a href="#">更多</a>
		</div>
		
		<div class="chana_prodution"><!--陶瓷制作视频-->
			<p>陶瓷制作</p>
			<div class="video">视频</div>
			<div class="video">视频</div>
			<div class="video">视频</div>
			<div class="video">视频</div>	
		</div>
		
		
		<div class="works_display"><!--作品展集-->
			<p>作品长廊</p>
			<div class="works_wrap">
				<h4>xx类</h4>
				<div class="works_img"><!--作品图片-->
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
				</div>
				
				<h4>xx类</h4>
				<div class="works_img"><!--作品图片-->
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
				</div>
				
				<h4>xx类</h4>
				<div class="works_img"><!--作品图片-->
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
					<a href="#"><img src="#"/></a>
				</div>
				
			</div>
		</div>
		
		
		<!--公共尾部-->
			<?php $this->load->view('inc_bottom')?>
	</body>
</html>
