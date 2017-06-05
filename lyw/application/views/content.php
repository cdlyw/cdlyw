<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/index.css" />
	<style type="text/css">
     body { background:#fff; padding:20px;}
     
    </style>
	</head>
	<body>
		<!--公共头部-->
		<?php $this->load->view('inc_top')?>
		<div class="news_content">
			<div class="news_title"><?=$title?></div>
			<div class="news_other">发布时间：<?=date("Y-m-d",$db["create_time"])?></div>
			<div class="news_contents"><?=$db["contents"]?></div>
		</div>
		<!--公共尾部-->
		<?php $this->load->view('inc_bottom')?>
	</body>
</html>
