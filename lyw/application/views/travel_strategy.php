<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/index.css" />
		<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/travel_strategy.css" />
	<style type="text/css">
     body { background:#fff; padding:20px;}
     
    </style>
	</head>
	<body>
		<!--公共头部-->
		<?php $this->load->view('inc_top')?>
	   
	      <div class="recmd_display">
				<div class="left">
                    <a><h4>当季必去</h4></a><p><a>XXX</a>&nbsp;&nbsp;&nbsp;<a>XXX</a><br>
					<a>XXX</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>XXX</a></p>
					<a><h4>热门推荐</h4></a><p><a>XXX</a>&nbsp;&nbsp;&nbsp;<br><a>XXX</a></p>
					<a><h4>周边附近</h4></a>
				</div>
				  <a href="#"><img src="#" id="pic" height="300" width="1150" /></a>
					 <script>
						 var pics=["#","#","#"];
						 var index=0;
						 function change()
						 {
							 index=(index+1)%3;
							 var obj=document.getElementById("pic");
							 obj.src=pics[index];
							 setTimeout(change,3000);
						 }
						 setTimeout(change,3000);
					 </script>
					 </div>
			 <div class="exemple2">
			 <div class="left_items2"><p>xxx</p><a>请点击进入</a></div>
			    <div class="items2">
				    <div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
				    xxx<br>xxx
				</div>
			<div class="items2">
				<div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
			  xxx<br>xxx
			</div>
			<div class="items2">
				<div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
			 xxx<br>xxx
			</div>
			</div>
		   
		   
		   <div class="exemple2">
			<div class="left_items2"><p>xxx</p><a>请点击进入</a></div>
			    <div class="items2">
				    <div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
				    xxx<br>xxx
				</div>
			<div class="items2">
				<div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
			  xxx<br>xxx
			</div>
			<div class="items2">
				<div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
			 xxx<br>xxx
			</div>
		</div>
		
	      <div class="exemple2">
			<div class="left_items2"><p>xxx</p><a>请点击进入</a></div>
			    <div class="items2">
				    <div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
				    xxx<br>xxx
				</div>
			<div class="items2">
				<div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
			  xxx<br>xxx
			</div>
			<div class="items2">
				<div class="pic"><a><img src="#"  width="250" height="230"/></a></div>
			 xxx<br>xxx
			</div>
		</div>
	       
	     <!--公共尾部-->
		<?php $this->load->view('inc_bottom')?>
	</body>
</html>
