<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv=Content-Type content="text/html;charset=utf-8"/>
<script src="http://dq//Public/js/jquery_1.js"></script>
<script type="text/javascript" charset="utf-8" src="http://dq//Public/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="http://dq//Public/js/ueditor/ueditor.all.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="http://dq//Public/js/ueditor/lang/zh-cn/zh-cn.js"></script>


<link href="http://dq//Public/assets/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="http://dq//Public/assets/css/font-awesome.min.css" />

<!--[if IE 7]>
      <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
<!-- page specific plugin styles -->
<!-- fonts -->
<!-- ace styles -->

<link rel="stylesheet" href="http://dq//Public/assets/css/ace.css" />
<link rel="stylesheet" href="http://dq//Public/assets/css/ace-rtl.min.css" />
<link rel="stylesheet" href="http://dq//Public/assets/css/ace-skins.min.css" />

<!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->
<!-- inline styles related to this page -->
<!-- ace settings handler -->

<script src="http://dq//Public/assets/js/ace-extra.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="block_start()">
<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
try { ace.settings.check('breadcrumbs', 'fixed') } catch (e) { }
		</script>

		<ul class="breadcrumb">
			<li>
			<i class="icon-home home-icon"></i>
			<a href="#">首页</a>
			</li>
			<li class="active">生成</li>
		</ul><!-- .breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="icon-search nav-search-icon"></i>
				</span>
			</form>
		</div><!-- #nav-search -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>
				生成后台
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</button>

					<i class="icon-ok green"></i>

					欢迎使用
					<strong class="green">
						后台管理系统
						<small>(v1.2)</small>
					</strong>
				</div>

				<div class="widget-body">
					<div class="widget-main no-padding">

						<div class="item_line">
							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div style="padding:0px 10px">
								<a href="javascript:;" channelid="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
							</div><?php endforeach; endif; ?>
						</div>
							<div class="left" style="float:left;width:60%;border:1px solid black;height:1000px">

							</div>
							<div class="right" style="margin-left:30px;float:left;width:35%;border:1px solid black;height:1000px">
								<span style="text-align:center">线上选择</span><hr>
								<!--			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class='left_div' style='float:left;padding:10px 20px 40px 20px' itemid='"+v.id+"'><div><img style='width:200px;height:150px' src='"+v.image_url+"'></img></div><div style='text-align:center'><span>"+v.title+"</span></div></div>
							<li value=''><div><img src=''></img><span></span></div></li><?php endforeach; endif; ?>-->
							</div>

							<hr>
							<div class="html_code">
								<textarea id="html_code" style="width:60%;height:300px">
									<?php echo ($html_code); ?>
								</textarea>

								<hr>
								机选 : <input type="checkbox" id="auto_gen"/>
								    |    <input type="button" value="确认" id="block_1" class="block_submit"/>
							</div>

							<script>

//$(".left ul").append("<li value='"+v.id+"'><div><img src='"+v.image_url+"'></img><span>"+v.title+"</span></div></li>");


						$(".item_line a").click(function(){
								$(".left").html('');
								var channelid=$(this).attr("channelid");
								$.ajax({
url:'http://dq/index.php?m=Item&c=Index&a=getItem&channelid='+channelid+'&jsonpcallback=?',
data:{},
dataType:"json",
type:"get",
success:function(data){
var str="";
$.each(data,function(k,v){
	str+="<div class='left_div' style='float:left;padding:10px 20px 40px 20px' itemid='"+v.id+"'><div><img style='width:200px;height:150px' src='"+v.image_url+"'></img></div><div style='text-align:center'><span>"+v.title+"</span></div></div>";

})
$(".left").append(str);
$(".left .left_div").click(function(){
	var _this=$(this);
	$(".right").append(_this.clone());
$(".right .left_div").click(function(){
	$(this).remove();
	});
	});



}
});
								});
$(".right .left_div").click(function(){
	$(this).remove();
	});
function block_start(){
	$(".block_submit").click(function(){
			var str="";
			var html_code=$("#html_code").val();
			var auto=$("#auto_gen").is(":checked");
			$(".right .left_div").each(function(){
				str+=$(this).attr("itemid")+",";
				});
			$.ajax({
url:'http://dq/index.php?m=Block&c=Index&a=doBlock&jsonpcallback=?',
data:{"data":str,"auto":auto,"type":"liquor","blockid":"<?php echo $_GET['blockid'];?>","html_code":html_code},
dataType:"json",
type:"post",
success:function(data){
if(data=='-1'){
alert("数据不完整");
}
else if(data=='1'){
alert("修改成功");
}
else{
alert("未知错误（可能代码有误）");
}

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






					</div><!-- /widget-main -->

				</div><!-- /widget-body -->
			</div><!-- /widget-box -->
		</div>


	</div><!-- /.col -->
</div><!-- /.row -->
		</div><!-- /.page-content -->
	    </div><!-- /.main-content -->
</body>
</html>