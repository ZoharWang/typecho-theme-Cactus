<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
			<footer id="footer">
				<p class="small">
					&copy; Copyright <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> /
					<a href="https://www.iwch.me/archives/668.html">Cactus</a> /
					<a href="http://typecho.org">Typecho</a>
<?php if ($this->options->icpNumber) : ?>
					/ <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow"><?php $this->options->icpNumber(); ?></a>
<?php endif; ?>
				</p>
			</footer>
		</section>
<?php if (!empty($this->options->optimizeOptions) && in_array('EnableHighlighting', $this->options->optimizeOptions)) : ?>
<?php if (!empty($this->options->optimizeOptions) && in_array('EnableCdn', $this->options->optimizeOptions)) : ?>
		<script src="https://cdn.jsdelivr.net/gh/ZoharWang/typecho-theme-Cactus@<?php echo CACTUS_VERSION; ?>/highlight.min.js"></script>
<?php else : ?>
		<script src="<?php $this->options->themeUrl('highlight.js'); ?>?v=<?php echo CACTUS_VERSION; ?>"></script>
<?php endif; ?>
		<script>hljs.initHighlightingOnLoad();</script>
<?php endif; ?>
		<?php $this->footer(); ?>
		<?php $this->options->footer(); ?>

	</body>
</html>
