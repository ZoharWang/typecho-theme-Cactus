<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
			<footer id="footer">
				<p class="small">
					&copy; Copyright <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> /
					<a href="https://www.iwch.me/archives/668.html">Cactus</a> /
					<a href="http://typecho.org">Typecho</a>
				</p>
			</footer>
		</section>
		<script src="<?php $this->options->themeUrl('highlight.js'); ?>"></script>
		<script>hljs.initHighlightingOnLoad();</script>
	</body>
</html>
