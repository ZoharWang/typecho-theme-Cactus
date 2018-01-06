<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
			<div id="comments">
				<?php $this->comments()->to($comments); ?>
				<?php if ($comments->have()): ?>
				<p><b><?php $this->commentsNum(_t('快抢沙发'), _t('沙发被抢'), _t('已有 %d 条评论')); ?></b></p>
				<div data-no-instant>
				<?php $comments->listComments(); ?>
				</div>
				<div class="center"><?php $comments->pageNav(); ?></div>
				<?php endif; ?>
				<?php if($this->allow('comment')): ?>
				<div id="<?php $this->respondId(); ?>" class="respond">
				<div class="cancel-comment-reply">
				<?php $comments->cancelReply(); ?>
				</div>
			<p id="comments" class="subhead"><b><?php _e('添加新评论'); ?></b></p>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="form">
			<?php if($this->user->hasLogin()): ?>
				<p>登录为 <a href="<?php $this->options->profileUrl(); ?>" target="_blank" data-no-instant><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" data-no-instant><?php _e('退出'); ?> &raquo;</a></p>
					<?php else: ?>
						<p><input type="text" name="author" id="author" class="text" placeholder="称呼" value="<?php $this->remember('author'); ?>" required /></p>
						<p><input type="email" name="mail" id="mail" class="text" placeholder="Email" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> /></p>
						<p><input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> /></p>
					<?php endif; ?>
				<p><textarea rows="8" cols="50" name="text" id="textarea" class="textarea" placeholder="内容" required ><?php $this->remember('text'); ?></textarea></p>
			<p><button type="submit" class="submit"><?php _e('提交评论 (Ctrl+Enter)'); ?></button></p>
			</form>
				</div>
					<?php if ($this->options->Ic == 'o'): ?>
						<script type="text/javascript">(function(){window.TypechoComment={dom:function(id){return document.getElementById(id)},create:function(tag,attr){var el=document.createElement(tag);for(var key in attr){el.setAttribute(key,attr[key])}return el},reply:function(cid,coid){var comment=this.dom(cid),parent=comment.parentNode,response=this.dom("<?php $this->respondId(); ?>"),input=this.dom("comment-parent"),form="form"==response.tagName?response:response.getElementsByTagName("form")[0],textarea=response.getElementsByTagName("textarea")[0];if(null==input){input=this.create("input",{"type":"hidden","name":"parent","id":"comment-parent"});form.appendChild(input)}input.setAttribute("value",coid);if(null==this.dom("comment-form-place-holder")){var holder=this.create("div",{"id":"comment-form-place-holder"});response.parentNode.insertBefore(holder,response)}comment.appendChild(response);this.dom("cancel-comment-reply-link").style.display="";if(null!=textarea&&"text"==textarea.name){textarea.focus()}return false},cancelReply:function(){var response=this.dom("<?php $this->respondId(); ?>"),holder=this.dom("comment-form-place-holder"),input=this.dom("comment-parent");if(null!=input){input.parentNode.removeChild(input)}if(null==holder){return true}this.dom("cancel-comment-reply-link").style.display="none";holder.parentNode.insertBefore(response,holder);return false}}})();</script>
					<?php endif; ?>
				<?php else: ?>
					<?php _e('<div class="alert info center">Comments Disabled.</div>'); ?>
				<?php endif; ?>
			</div>
