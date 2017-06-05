<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/index.css" />
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/travel_notes.css" />
	<style type="text/css">
     body { background:#fff; padding:20px;}
     
    </style>
	</head>
	<body>
		<!--公共头部-->
		<?php $this->load->view('inc_top')?>
		
		<div class="tourism_notes"><!--游客游记-->
			<div class="tourist"><!--游客游记内容-->
					<div class="pic"><img src="#" /></div>
					<div class="des"><a href="#">游记内容描述asdghlkhdlagsl</a></div>
						<div class="time">2012-4-12</div>
			</div>
			
			<div class="tourist">
					<div class="pic"><img src="#" /></div>
					<div class="des"><a href="#">游记内容描述asdghlkhdlagsl</a></div>
						<div class="time">2012-4-12</div>
			</div>
			
			<div class="tourist">
					<div class="pic"><img src="#" /></div>
					<div class="des"><a href="#">游记内容描述asdghlkhdlagsl</a></div>
						<div class="time">2012-4-12</div>
			</div>
			
			<div class="tourist">
					<div class="pic"><img src="#" /></div>
					<div class="des"><a href="#">游记内容描述asdghlkhdlagsl</a></div>
						<div class="time">2012-4-12</div>
			</div>
			
			<div class="pages">后台编写一下分页</div>
		</div>
		
		<!--公共尾部-->
		<?php $this->load->view('inc_bottom')?>
	</body>
</html>
