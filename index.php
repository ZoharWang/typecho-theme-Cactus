<?php
/**
 * 一个简约的Typecho响应式主题。
 *
 * @package Cactus
 * @author Zohar
 * @version 1.0.0
 * @link https://www.iwch.me/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
			<div class="profile">
				<section id="wrapper">
					<header id="header">
						<a href="<?php $this->options->siteUrl(); ?>">
							<img id="avatar" src="<?php if ($this->options->avatarUrl){$this->options->avatarUrl();}else{echo 'https://secure.gravatar.com/avatar/'.md5(strtolower(trim($this->author->mail)));}?>">
						</a>
						<h1><?php $this->options->title() ?></h1>
						<h2><?php $this->options->description() ?></h2>
					</header>
				</section>
			</div>
			<ul id="post-list">
<?php while($this->next()): ?>
				<li>
					<a href="<?php $this->permalink() ?>">
						<aside class="dates"><?php $this->date('M j Y'); ?></aside>
					</a>
					<a href="<?php $this->permalink() ?>">
						<?php $this->title() ?>
						<h2></h2>
					</a>
				</li>
<?php endwhile; ?>
			</ul>
			<nav id="post-nav">
				<span class="prev">
					<?php $this->pageLink('<span class="arrow">←</span> 上一页','prev'); ?>

				</span>
				<span class="next">
					<?php $this->pageLink('下一页 <span class="arrow">→</span>','next'); ?>

				</span>
			</nav>
<?php $this->need('footer.php'); ?>
