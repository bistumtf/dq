<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
 <meta http-equiv=Content-Type content="text/html;charset=utf-8"/>
<script src="http://dq/Public/js/jquery_1.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://dq/Public/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://dq/Public/js/ueditor/ueditor.all.js"></script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="http://dq/Public/js/ueditor/lang/zh-cn/zh-cn.js"></script>


    <link href="http://dq/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://dq/Public/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
      <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!-- page specific plugin styles -->
    <!-- fonts -->
    <!-- ace styles -->

    <link rel="stylesheet" href="http://dq/Public/assets/css/ace.css" />
    <link rel="stylesheet" href="http://dq/Public/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="http://dq/Public/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->

    <script src="http://dq/Public/assets/js/ace-extra.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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
				增加表格
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
                                    Ace后台管理系统
                                    <small>(v1.2)</small>
                                </strong>
                                ,轻量级好用的后台管理系统模版.
                            </div>

			    <div class="widget-body">
				    <div class="widget-main no-padding">
					    <form name="form1" action="http://dq/index.php?m=Item&c=Index&a=addTable" method="post" enctype="multipart/form-data">
						    <table class="table table-bordered table-striped">

							    <tbody id="table_tb">

							    <tr><td colspan="2"><input type="button" id="add_table_item" value="增加条目"/></td></tr>
							    <tr id="table_tr">
								    <td>名称:</td><td><input  name="title"/></td>
							    </tr>
							    </tbody>
						    </table>
					    </form>

					    <table class="table table-bordered table-striped">
						    <tr>
							    <td>

								    <input type="button" onclick="form_submit()"value="提交"/></td>
						    </tr>
					    </table>
					    <script>
$("#add_table_item").click(function(){
		$("#table_tb").append(" <tr><td><input name='item[]' /td><td><input  disabled='disabled'/></td> </tr>");

		});


					    </script>


						</table>
					</div><!-- /widget-main -->
				</div><!-- /widget-body -->
			</div><!-- /widget-box -->
		</div>


    </div><!-- /.col -->
		    </div><!-- /.row -->
		</div><!-- /.page-content -->
	    </div><!-- /.main-content -->
<script>
function form_submit(){
	$("#textarea_content").html(content);
	form1.submit();
}
$("#add_file").click(function(){
		$(this).parent().siblings().append('<tr><td><input type="file" name="file[]"/></td></tr>');
		})

</script>











</body>
</html>