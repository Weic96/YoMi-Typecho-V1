<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
	

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body id="container">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="mask"></div>
	<header id="navbar">
		<div id="navbar-cross" class="animated flipInX">
			<a href="<?php $this->options->siteUrl(); ?>" class="nabar-title">
				<?php $this->options->title() ?>
			</a>
			<a href="javascript:;" id="nabar-button">
				<i class="fa fa-navicon"></i>
			</a>
			<a href="javascript:;" id="nabar-search-btn">
				<i class="fa fa-search"></i>
			</a>
			<div style="clear:both;"></div>
		</div>
	</header>
	<form id="navbar-search" method="post" action="./" role="search">
			<input id="search-input" class="search-input" type="text" name="s" placeholder="<?php _e('输入关键字搜索'); ?>">
	</form>
    <div id="navbar-vertical">
		<div class="navbar-vertical-header">
		<a href="javascript:;" id="navbar-vertical-exit" class="navbar-vertical-exit">
			<i class="fa fa-close"></i>
		</a>
		<div style="clear:both;"></div>
			<div class="navbar-vertical-logo">
				<img src="<?php $this->options->themeUrl('images/logo.png'); ?>">
			</div>
		</div>
		<div class="navbar-footer">
				<a id="weibo-fixed-btn" href="javascript:;"><i class="fa fa-weibo"></i></a>
				<a href=""><i class="fa fa-github"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href=""><i class="fa fa-qq"></i></a>
				<a href=""><i class="fa fa-weixin"></i></a>
				<a href=""><i class="fa fa-envelope"></i></a>
		</div>
		<div class="navbar-vertical-main">
			<ul>
				<li><a<?php if($this->is('index')): ?> class="navbar-link"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>">
				&nbsp;&nbsp;
				<i class="fa fa-home"></i>
				&nbsp;&nbsp;<?php _e('首页'); ?>
				</a></li>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
				<li><a<?php if($this->is('page', $pages->slug)): ?> class="navbar-link"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
				&nbsp;&nbsp;
				<i class="fa fa-leaf"></i>
				&nbsp;&nbsp;<?php $pages->title(); ?>
				</a></li>
				<?php endwhile; ?>
			</ul>
			<div class="navbar-hr"></div>
			<ul>
				<li><a class="navbar-link" href="#">
				&nbsp;&nbsp;
				<i class="fa fa-user"></i>
				&nbsp;&nbsp;关于我
				</a></li>
				<li><a class="navbar-link" href="#">
				&nbsp;&nbsp;
				<i class="fa fa-tags"></i>
				&nbsp;&nbsp;标签云
				</a></li>
				<li><a class="navbar-link" href="#">
				&nbsp;&nbsp;
				<i class="fa fa-comments"></i>
				&nbsp;&nbsp;给我留言
				</a></li>
				<li><a class="navbar-link" href="#">
				&nbsp;&nbsp;
				<i class="fa fa-bug"></i>
				&nbsp;&nbsp;提交建议
				</a></li>
				<li><a class="navbar-link" href="#">
				&nbsp;&nbsp;
				<i class="fa fa-dashboard"></i>
				&nbsp;&nbsp;本站主题
				</a></li>
			</ul>
		</div>
	</div>
	<div id="weibo-fixed">
		<a href="javascript:;" id="weibo-fixed-exit">
			<i class="fa fa-close"></i>
		</a>
		<iframe width="100%" height="550" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=1&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=3948524855&verifier=36719022&dpc=1"></iframe>
	</div>
	<div class="container">
    
    
