<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="index-main">
	<article class="post-main animated fadeInDown">
		<header class="post-header">
			<h2><?php $this->title() ?></h2>
		</header>
		<section class="post-main-block">
			<?php $this->content(); ?>
		</section>
	</article>
</div>
<?php $this->need('footer.php'); ?>
