<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="index-main">
	<article class="post-main animated fadeInDown">
		<header class="post-header">
			<h2><?php $this->title() ?></h2>
			<div class="post-header-info">
			<a href="" class="fa fa-user">&nbsp;<?php $this->author(); ?></a> <span>|</span>
			<time class="post-header-time fa fa-calendar" datetime="<?php $this->date('c'); ?>" itemprop="datePublished">&nbsp;<?php $this->date('Y/m/d'); ?></time> <span>|</span>
			<a href="" class="fa fa-tags">&nbsp;<?php $this->tags(',', true, '没有标签'); ?></a> <span>|</span>
			<a class="fa fa-folder-open" href="">&nbsp;<?php _e(''); ?><?php $this->category(','); ?></a> <span>|</span>
			<a href="" class="fa fa-comments">&nbsp;<?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a> <span>|</span>
			</div>
		</header>
		<section class="post-main-block">
		<?php $this->content(); ?>
		</section>
		<footer class="post-footer">
			<div class="post-footer-copy">
				转载请注明来源 : <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a> - <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
			</div>
			<div class="post-footer-share">
					<span class="post-share-text">分享到 <i class="fa fa-share-alt"></i></span>
					<a href="" class="fa fa-weibo share-weibo"></a>
					<a href="" class="fa fa-tencent-weibo share-txwb"></a>
					<a href="" class="fa fa-facebook share-facebook"></a>
					<a href="" class="fa fa-twitter share-twitter"></a>
					<a href="" class="fa fa-google-plus share-google"></a>
			</div>
			<div class="post-more">
				<ul>
					<li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
					<li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
				</ul>
			</div>
			
		</footer>
	<?php $this->need('comments.php'); ?>
	</article>
</div>
<?php $this->need('footer.php'); ?>
