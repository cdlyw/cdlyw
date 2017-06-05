<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/index.css" />
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/customize.css" />
	<style type="text/css">
     body { background:#fff; padding:20px;}
     
    </style>
	</head>
	<body>
		<!--公共头部-->
		<?php $this->load->view('inc_top')?>
		
		
		<div class="background"><!--背景图片-->
			<div class="content" >
			<input type="button" value="定制" />
			</div>
		</div>
		
	   
	   <div class="menu_kinds"><!--菜单栏-->
	   <ul>
	   	<li ><a href="#"><p>旅&nbsp;&nbsp;&nbsp;游</p></a></li>
	   	<li><a href="#"><p>酒&nbsp;&nbsp;&nbsp;店</p></a></li>
        <li><a href="#"><p>旅行套餐</p></a></li>
        <li><a href="#"><p>美食餐饮</p></a></li>
        <li><a href="#"><p>门&nbsp;&nbsp;&nbsp;票</p></a></li>
        </ul>
	   </div>
			
			
		<div class="hot_plans"><!--热荐方案-->
			<div class="sec_title1"><p>热荐方案 </p></div>
			<div class="examples"></div>
			<div class="examples"></div>
			<div class="examples"></div>
		</div>	
			
			
		<div class="team_travel"><!--团队旅游-->
			<div class="sec_title2"><p>团队旅游 </p></div>
			<div class="team"></div>
			<div class="team"></div>
			<div class="team"></div>
			<div class="team"></div>
		</div>	
		
		
		<!--公共尾部-->
		<?php $this->load->view('inc_bottom')?>
	</body>
</html>
