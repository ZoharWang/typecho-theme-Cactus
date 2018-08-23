<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

define('CACTUS_VERSION', '1.0.4');

function themeConfig($form) {
	$avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像 URL 地址'), _t('在这里填入一个图片 URL 地址, 留空则返回 Gravatar, 不建议留空.'));
	$form->addInput($avatarUrl);

	$themeColor = new Typecho_Widget_Helper_Form_Element_Text('themeColor', NULL, '#000000', _t('主题颜色'), _t('在这里填入一个主题颜色, 默认为 #000000, 留空则不启用.'));
	$form->addInput($themeColor);

	$icpNumber = new Typecho_Widget_Helper_Form_Element_Text('icpNumber', NULL, NULL, _t('ICP 备案许可证号'), _t('在这里填入一个 ICP 备案许可证号, 留空则不显示.'));
	$form->addInput($icpNumber);

	$optimizeOptions = new Typecho_Widget_Helper_Form_Element_Checkbox('optimizeOptions', array(
		'EnableHighlighting' => _t('启用代码高亮'),
		'EnableCdn' => _t('使用 CDN 加速本主题内的 CSS & JS 文件')
	), array(
		'EnableHighlighting',
		'EnableCdn'
	), _t('优化选项'));
	$form->addInput($optimizeOptions->multiMode());

	$srcAddress = new Typecho_Widget_Helper_Form_Element_Text('srcAddress', NULL, NULL, _t('附件原始地址'), _t('例如: http(s)://www.example.com/usr/uploads/ 留空则不启用.'));
	$form->addInput($srcAddress);

	$cdnAddress = new Typecho_Widget_Helper_Form_Element_Text('cdnAddress', NULL, NULL, _t('附件 CDN 地址'), _t('例如: http(s)://cdn.example.com/usr/uploads/ 留空则不启用.'));
	$form->addInput($cdnAddress);

	$header = new Typecho_Widget_Helper_Form_Element_Textarea('header', NULL, NULL, _t('自定义 Header'), _t('在这里填入自定义 Header, 如自定义 CSS 样式等.'));
	$form->addInput($header);

	$footer = new Typecho_Widget_Helper_Form_Element_Textarea('footer', NULL, NULL, _t('自定义 Footer'), _t('在这里填入自定义 Footer, 如自定义 JavaScript 脚本等.'));
	$form->addInput($footer);
}

function parseContent($obj) {
	$options = Typecho_Widget::widget('Widget_Options');
	if (!empty($options->srcAddress) && !empty($options->cdnAddress)) {
		$obj->content = str_ireplace($options->srcAddress, $options->cdnAddress, $obj->content);
	}
	echo trim($obj->content);
}
