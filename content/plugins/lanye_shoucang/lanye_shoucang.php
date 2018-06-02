<?php
/*
Plugin Name: 蓝叶收藏喜欢插件
Version: 2.0
Plugin URL: http://lanyes.org
Description: 在文章页面正文下方添加把文章加入百度云收藏和百度喜欢按钮。
Author: 蓝叶
Author Email: w@lanyes.org
Author URL: http://lanyes.org
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function lanye_shoucang(){
	$active_plugins = Option::get('active_plugins');
	$lanye_shoucang_html = '<style>#baidushare{width:300px;margin:10px auto;height:60px;}#bdshare{width:145px;height:60px;background:url(http://t1.qpic.cn/mblogpic/1a74b47be09ee83391f6/2000) no-repeat;margin-right:5px;padding:0 !important;}#bdshare:hover{background:url(http://t1.qpic.cn/mblogpic/1a74b47be09ee83391f6/2000) no-repeat 0 -65px;}</style><div id="baidushare">
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a style="display:block;height:60px;width:145px;background-position:0 -9999px !important;height:60px;" href="#" class="bds_bdysc" data-cmd="bdysc"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=636112" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<div class="bdlikebutton" style="float:left"></div>
<script id="bdlike_shell"></script>
<script>
var bdShare_config = {
	"type":"large",
	"color":"blue",
	"uid":"636112",
	"share":"yes",
	"likeText":"觉得好请顶起！",
	"likedText":"您已顶过，谢谢！"
};
document.getElementById("bdlike_shell").src="http://bdimg.share.baidu.com/static/js/like_shell.js?t=" + Math.ceil(new Date()/3600000);
</script>
</div>'."\r\n";
	echo $lanye_shoucang_html;
}

addAction('log_related', 'lanye_shoucang');