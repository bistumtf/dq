<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<script src="/Public/js/jquery_1.js"></script>
</head>
<body>
<form action="index.php?m=Item&c=Index&a=uploadLiquor" method="post" enctype="multipart/form-data">
<table>

	<tr>
		<td>标题:</td><td><input name="title"/></td>
	</tr>
	<tr>
		<tr>
		<td><input type="file" name="file[]"/></td>
		<td><input type="button" id="add_file" value='增加'/></td>
	</tr>
	</tr>
	<tr>
		<td>酒类型:</td>
		<td>
			<select name="type">
				<option value="1">1</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>酒精度:</td><td><input name="alcohol"/></td>
	</tr>
	<tr>
		<td>饮酒温度:</td><td><input name="templera"/></td>
	</tr>
	<tr>
		<td>酒等级:</td><td><input name="level"/></td>
	</tr>
	<tr>
		<td>价格:</td><td><input name="price"/></td>
	</tr>
	<tr>
		产地:国家: 省: 县:
	</tr>
	<tr>
		<td>总量:</td><td><input name="total"/></td>
	</tr>
	<tr>
		<input type="submit" value="提交"/>
	</tr>
</table>
</form>
<script>
$("#add_file").click(function(){
		$(this).parent().siblings().append('<tr><td><input type="file" name="file[]"/></td></tr>');
		})

</script>
</body>
</html>