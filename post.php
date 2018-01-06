<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
			<article class="post">
				<header>
					<h1><?php $this->title() ?></h1>
					<h2 class="headline">
						<?php $this->date('F j, Y'); ?>

						<?php $this->category(' '); ?>

					</h2>
				</header>
				<section id="post-body">
					<?php $this->content(); ?>

				</section>
			</article>
			<?php $this->need('comments.php'); ?>
			<?php $this->need('footer.php'); ?>
