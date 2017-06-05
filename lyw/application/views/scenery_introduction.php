<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/index.css" />
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/scenery_introduction.css" />
	<style type="text/css">
     body { background:#fff; padding:20px;}
     
    </style>
	</head>
	<body>
		<!--公共头部-->
		<?php $this->load->view('inc_top')?>
		
		<div class="scenecry"><!--景点介绍-->
			<p>热门景点</p>
			<div class="wrap_l">
			   <div class="pic_disp"><img src="#"/></div>
			   <div class="lingxing"></div>
			   <div class="des"><a href="#"><h5>景点名</h5></a>
			   	<a href="#"><p>描述sdvgadbsgdbdahbha</p></a></div>
			</div>
			
			<div class="wrap_r">
			   <div class="pic_disp"><img src="#"/></div>
			   <div class="lingxing"></div>
			   <div class="des"><a href="#"><h5>景点名</h5></a>
			   	<a href="#"><p>描述sdvgadbsgdbdahbha</p></a></div>
			</div>
			
			
			<div class="wrap_l">
			   <div class="pic_disp"><img src="#"/></div>
			   <div class="lingxing"></div>
			   <div class="des"><a href="#"><h5>景点名</h5></a>
			   	<a href="#"><p>描述sdvgadbsgdbdahbh</p></a></div>
			</div>
			
			<div class="wrap_r">
			   <div class="pic_disp"><img src="#"/></div>
			   <div class="lingxing"></div>
			   <div class="des"><a href="#"><h5>景点名</h5></a>
			   	<a href="#"><p>描述sdvgadbsgdbdahbha</p></a></div>
			</div>
		</div>
		
		
			<div class="interest_place">
				<p>附近</p>
	    		<div class="left-1"><a><img src="#"/>餐饮或陶瓷店或者类似于陶溪川等地方</a></div>
	    	    <div class="right-1"><a><img src="#"/></a></div>
	    	    <div class="left-2"><a><img src="#"/></a></div>
	    	    <div class="right-2"><a><img src="#"/></a></div>
	    	</div>   
		
		
		<!--公共尾部-->
		<?php $this->load->view('inc_bottom')?>
	</body>
</html>
