<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="index-main animated fadeInDown">
        <article class="index-post-block archive-page-title animated fadeInDown">
			<h3 class="archive-title"><?php $this->archiveTitle(array(
				'category'  =>  _t('分类 <span class="archive-page-keyword">%s</span> 下的文章'),
				'search'    =>  _t('包含关键字 <span class="archive-page-keyword">%s</span> 的文章'),
				'tag'       =>  _t('标签 <span class="archive-page-keyword">%s</span> 下的文章'),
				'author'    =>  _t('<span class="archive-page-keyword">%s</span> 发布的文章')
			), '', ''); ?></h3>
		</article>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="index-post-block animated fadeInDown">
				<header class="post-block-title">
					<a href="<?php $this->permalink() ?>" onmouseover="this.className='animated shake'" onmouseout="this.className=''" onclick="this.className='animated rubberBand'"><?php $this->title() ?></a>
				</header>
				<section class="post-block-main">
					<p class="post-block-main-text"><?php $this->excerpt(65, '......'); ?></p> 
					<a class="index-post-readmore" href="<?php $this->permalink() ?>" onclick="this.className='index-post-readmore animated rubberBand'">查看全文</a>
				</section>
				<div style="clear:both;"></div>
				<footer class="post-block-footer">
					<div class="post-block-footer-left">
						<a href=""><img class="post-block-logo" src="<?php $this->options->themeUrl('images/logo.png'); ?>"></a>
					</div>
					<div class="post-block-footer-right">
						<a class="fa fa-tags" href="">&nbsp;<?php $this->tags(',', true, '没有标签'); ?></a> <span>|</span>
						<a class="fa fa-comments" href="">&nbsp;<?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a> <span>|</span>
						<time class="fa fa-calendar" datetime="<?php $this->date('c'); ?>" itemprop="datePublished">&nbsp;<?php $this->date('Y/m/d'); ?></time>
					</div>
					<div style="clear:both;"></div>
				</footer>
			</article>
    	<?php endwhile; ?>
        <?php else: ?>
		<article class="error-page animated fadeInDown">
			<h2 style="text-align:center;margin-top:20px;">
			<span style="color:#dd5;font-size:40px;font-weight:normal;">搜</span>
			<span style="color:#a55;font-size:40px;font-weight:normal;">索</span>
			<span style="color:#dd5;font-size:40px;font-weight:normal;">失</span>
			<span style="color:#a55;font-size:40px;font-weight:normal;">败</span>
			</h2>
			<img src="<?php $this->options->themeUrl('images/404.png'); ?>" />
			<p>哎呀！没有你要搜索的内容。</p>
		</article>
        <?php endif; ?>

    <article class="paging">
		<?php $this->pageNav('上一页', '下一页'); ?>
	</article>
</div><!-- end #main-->
	<?php $this->need('footer.php'); ?>
