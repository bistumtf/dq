<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' =>array(
		'__ADMIN__' => 'http://dq/index.php?m=Home&c=Admin',
		'__PUBLIC__' => '/Common', // 更改默认的/Public 替换规则
		'__JS__' => '/Public/js/', // 增加新的JS类库路径替换规则
		'__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
	)
);
