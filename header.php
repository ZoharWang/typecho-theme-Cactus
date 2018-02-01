<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="<?php $this->options->charset(); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php $this->archiveTitle(array(
			'category'  =>  _t('分类 %s 下的文章'),
			'search'    =>  _t('包含关键字 %s 的文章'),
			'tag'       =>  _t('标签 %s 下的文章'),
			'author'    =>  _t('%s 发布的文章')
		), '', ' - '); ?><?php $this->options->title(); ?></title>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
		<link rel="stylesheet" href="<?php $this->options->themeUrl('highlight.css'); ?>">
		<?php $this->header(); ?>

	</head>
	<body>
		<nav class="main-nav">
			<a href="<?php $this->options->siteUrl(); ?>">首页</a>
			<?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>

			<a class="cta" href="<?php $this->options->feedUrl(); ?>">订阅</a>
		</nav>
		<section id="wrapper">
