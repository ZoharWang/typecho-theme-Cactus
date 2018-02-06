<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	$avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像 URL 地址'), _t('在这里填入一个图片 URL 地址, 留空则返回 Gravatar, 不建议留空.'));
	$form->addInput($avatarUrl);
}
