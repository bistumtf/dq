<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="/Public/js/jquery_1.js"></script>
</head>

<body>
<div class='left'>
<ul>
	<li id="li_1">
	页面
	</li>
	货物
	人员
	评论

	</li>
</ul>

</div>
<div class='right' style="height:1000px">
	<iframe style="width:100%;height:100%" id="right_iframe" src="">
	</iframe>
	
	
</div>
<script>
var page="";
$("#li_1").click(function(){
		$("#right_iframe").attr("src","http://www.baidu.com");
		});
</script>


</body>
</html>