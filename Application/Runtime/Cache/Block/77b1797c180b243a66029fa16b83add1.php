<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<script src="http://js_source/jquery_1.js"></script>
</head>
<body onload="block_start()">



	dsafa
	sadfs
	<div class="lock" style="background-color:white">
		<div class="left">
			<ul>
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><li value="<?php echo ($vo); ?>"><img src='<?php echo ($vo); ?>'/></li><?php endforeach; endif; ?>
			
			</ul>
		</div>
		<hr>
		<div class="right">
			<ul>
				<li value="1">1</li>
				<li value="2">2</li>
				<li value="3">3</li>
				<li value="4">4</li>
				<li value="5">5</li>
			</ul>
		</div>
		<input type="button" value="确认" id="block_1" class="block_submit"/>

	</div>

<script>
$.ajax({
			url:'__getBlockArr__',
			data:{},
			dataType:"json",
			type:"post",
			success:function(data){
			$.each(data,function(k,v){
				$(".right ul").append("<li value='"+k+"'>"+v+"</li>");
				})
$(".lock li").click(function(){
		var foward=$(this).attr("foward");
		if(foward==undefined){
			$(this).attr("foward","left");
			$(".left ul").append($(this));
		}
		else if(foward=="right"){
			$(this).attr("foward","left");
			$(".left ul").append($(this));
		}
		else{
			$(this).attr("foward","right");
			$(".right ul").append($(this));
		}
		});
			}
		});

function block_start(){
$(".block_submit").click(function(){
		var str="";
		$(".left li").each(function(){
			str+=$(this).attr("value")+",";
			});
		$.ajax({
			url:'__DOBLOCK__',
			data:{"data":str},
			dataType:"json",
			type:"post",
			success:function(data){
			alert(data);
			}
			});
		});

$(".lock li").click(function(){
		var foward=$(this).attr("foward");
		if(foward==undefined){
			$(this).attr("foward","left");
			$(".left ul").append($(this));
		}
		else if(foward=="right"){
			$(this).attr("foward","left");
			$(".left ul").append($(this));
		}
		else{
			$(this).attr("foward","right");
			$(".right ul").append($(this));
		}
		});
}
function jumpto(param){
	window.open("__INDEX__"+param);
}
</script>

</body>
</html>