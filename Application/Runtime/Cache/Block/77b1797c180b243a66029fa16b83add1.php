<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<script src="/Public/js/jquery_1.js"></script>
</head>
<body onload="block_start()">
	dsafa
	sadfs
	<div class="lock" style="background-color:white">
		<div class="left">
			<div class="left_div">click</div>
			<ul>
			
			</ul>
			<div class="right_div">click</div>
		</div>
		<hr>
		<div class="right">
			<ul>
				<?php if(is_array($data)): foreach($data as $key=>$vo): ?><li value=''><div><img src=''></img><span></span></div></li><?php endforeach; endif; ?>
			</ul>
		</div>
		<input type="button" value="确认" id="block_1" class="block_submit"/>

	</div>
	<hr>
	<div class="html_code">
		<textarea id="html_code">
			<?php echo ($html_code); ?>
		</textarea>

	</div>

<script>

$.ajax({
			url:'http://dq/index.php?m=Item&c=Index&a=ajax_list&jsonpcallback=?',
			data:{},
			dataType:"json",
			type:"post",
			success:function(data){
			$.each(data,function(k,v){
				$(".left ul").append("<li value='"+v.id+"'><div><img src='"+v.image_url+"'></img><span>"+v.title+"</span></div></li>");
				})
			$(".lock li").click(function(){
				var foward=$(this).attr("foward");
				if(foward==undefined){
				$(this).attr("foward","left");
				$(".right ul").append($(this));
				}
				else if(foward=="right"){
				$(this).attr("foward","left");
				$(".left ul").append($(this));
				}
				else{
				$(this).attr("foward","right");
				$(".left ul").append($(this));
				}
				});
			}
			})

function block_start(){
	$(".block_submit").click(function(){
		var str="";
		var html_code=$("#html_code").html();
		$(".right li").each(function(){
			str+=$(this).attr("value")+",";
			});
		$.ajax({
			url:'http://dq/index.php?m=Block&c=Index&a=doBlock',
			data:{"data":str,"type":"liquor","blockid":"<?php echo $_GET['blockid'];?>","html_code":html_code},
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