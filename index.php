<?php
/**
 * 一款简约时尚风格的typecho主题
 * 
 * @package Yomi-Typecho 
 * @author YoMi studio
 * @version 0.8
 * @link http://weic96.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="index-main">
	<?php while($this->next()): ?>
		<article class="index-post-block animated fadeInDown">
				<header class="post-block-title">
					<a href="<?php $this->permalink() ?>" onmouseover="this.className='animated shake'" onmouseout="this.className=''" onclick="this.className='animated rubberBand'"><?php $this->title() ?></a>
				</header>
				<section class="post-block-main">
					<p class="post-block-main-text"><?php $this->excerpt(130, ' ...'); ?></p> 
					<a class="index-post-readmore" href="<?php $this->permalink() ?>" onclick="this.className='index-post-readmore animated rubberBand'">查看全文</a>
				</section>
				<div style="clear:both;"></div>
				<footer class="post-block-footer">
					<div class="post-block-footer-left">
						<a href="<?php $this->author->permalink(); ?>"><img class="post-block-logo" src="<?php $this->options->themeUrl('images/logo.png'); ?>"></a>
					</div>
					<div class="post-block-footer-right">
						<a class="fa fa-tags" href="">&nbsp;<?php $this->tags(',', true, '没有标签'); ?></a> <span>|</span>
						<a class="fa fa-folder-open" href="">&nbsp;<?php _e(''); ?><?php $this->category(','); ?></a> <span>|</span>
						<a class="fa fa-comments" href="<?php $this->permalink() ?>#comments">&nbsp;<?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a> <span>|</span>
						<time class="fa fa-calendar" datetime="<?php $this->date('c'); ?>" itemprop="datePublished">&nbsp;<?php $this->date('F j, Y'); ?></time>
					</div>
					<div style="clear:both;"></div>
				</footer>
			</article>
	<?php endwhile; ?>

    <article class="paging">
		<?php $this->pageNav('上一页', '下一页'); ?>
	</article>
</div>
<?php $this->need('footer.php'); ?>
