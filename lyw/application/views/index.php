<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$title?></title>
	<link type="text/css" rel="stylesheet" href="<?=base_url("templates/default")?>/css/index.css" />
    <script type="text/javascript"  src="<?=base_url("templates/default")?>/js/navigation.min.js" /></script>
	<script type="text/javascript" src="<?=base_url("templates/default")?>/js/myfocus-2.0.4.min.js"></script>
    
    <style type="text/css">
     body { background:#fff; padding:20px;}
     #myFocus{ width:1150px; height:500px;}
    </style>
    <script type="text/javascript">
//设置
   myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_fancy'//风格
});
   </script>
	</head>
	
	<body>
		<div class="whole">
		<?php $this->load->view('inc_top')?>
			<div class="middle"><!--中间内容-->
				<div class="pic_change"><!--图片切换-->
					<div id="myFocus"><!--焦点图盒子-->
                      <div class="loading"></div><!--载入画面(可删除)-->
                         <div class="pic"><!--图片列表-->
  	                       <ul>
                           <li><a href="#1"><img src="<?=base_url("templates/default")?>/images/1m.jpg"  /></a></li>
                           <li><a href="#2"><img src="<?=base_url("templates/default")?>/images/2m.jpg" /></a></li>
                           <li><a href="#3"><img src="<?=base_url("templates/default")?>/images/3m.jpg" /></a></li>
                           <li><a href="#4"><img src="<?=base_url("templates/default")?>/images/4m.jpg"  /></a></li>
                           <li><a href="#5"><img src="<?=base_url("templates/default")?>/images/5m.jpg"  /></a></li>
  	                       </ul>
                         </div>
                       </div>
				</div>
			
			   <div class="hot_news"><!--热门新闻-->
			   <ul>
				<li class="title"><p>热门新闻</p></li>
				<?php
						$tmpCode=""; 
						if(sizeof($currentList)!=0){
							foreach ($currentList as $key=>$value){
								$tmpCode.='<li>&middot;<a target="blank" href="'.base_url("read/?id=".$currentList[$key]["id"]).'">'.$currentList[$key]["title"].'</a><span>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.date("Y-m-d",$currentList[$key]["create_time"]).'</span></li>';
							}
						}
						else{
							$tmpCode='<li>&middot;<a href="#">暂无数据</a><span>'.date("Y-m-d").'</span></li>';
						}
						echo $tmpCode;
				?>
			   </ul>
			   </div>
			
			   <div class="culture"><!--陶瓷文化-->
				<h2>陶瓷文化</h2>
			    <div class="video_display"><!--陶瓷视频-->
				 <?php
					$tmpCode=""; 
					if(sizeof($videos)!=0){
						foreach ($videos as $key=>$value){
							$tmpCode.='<li>&middot;<a target="blank" href="'.base_url("read_videos/?id=".$videos[$key]["id"]).'">'.$videos[$key]["title"].'</a><span>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.date("Y-m-d",$videos[$key]["create_time"]).'</span></li>';
						}
					}
					else{
						$tmpCode='<li>&middot;<a href="#">暂无数据</a><span>'.date("Y-m-d").'</span></li>';
					}
					echo $tmpCode;
				?>
			    </div>
			    
			    <div class="culture_des"><!--文化简介-->
			    		<?php
						$tmpCode=""; 
						if(sizeof($currentList)!=0){
							foreach ($currentList as $key=>$value){
								$tmpCode.='<li>&middot;<a target="blank" href="'.base_url("read/?id=".$currentList[$key]["id"]).'">'.$currentList[$key]["title"].'</a><span>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.date("Y-m-d",$currentList[$key]["create_time"]).'</span></li>';
							}
						}
						else{
							$tmpCode='<li>&middot;<a href="#">暂无数据</a><span>'.date("Y-m-d").'</span></li>';
						}
						echo $tmpCode;
				?>
			    </div>
			   </div>
			
			
			   <div class="travel_notes"><!--游记-->
				<p>游&nbsp;&nbsp;记</p> 
	    		   
	    		   <div class="notes">
	    		   	     <div class="img"><img src=""/></div>
	    		   	     <div class="state"><a href="#" >XXX</a>
	    		   	     	<a href="#"><p><font color="#555">dsglkjgsflhd</font></p></a>
	    		   	     	
	    		   	     </div>
	    		   </div>
	    		   
	    		   <div class="notes">
	    		   	     <div class="img"><img src=""/>图片</div>
	    		   	     <div class="state"><a href="#" >XXX</a>
	    		   	     	<a href=""><p><font color="#555">dsglkjgsflhd</font></p></a>
	    		   	     	
	    		   	     </div>
	    		   </div>
	    		   
	    		   <div class="notes">
	    		   	     <div class="img"><img src=""/></div>
	    		   	     <div class="state"><a href="#" >XXX</a>
	    		   	     	<a href=""><p><font color="#555">dsglkjgsflhd</font></p></a>
	    		   	     	
	    		   	     </div>
	    		   </div>
	    		   
	    		</div>
			   </div>
			<?php $this->load->view('inc_bottom')?>
		</div>
	</body>
</html>
