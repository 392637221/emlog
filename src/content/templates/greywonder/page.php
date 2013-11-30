<?php 
/*
* 自建页面模板
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="header single">
	<div class="container">
		<h2><?php echo $log_title; ?></h2>
	</div>
</div>
<div class="main">
	<div class="content">
		<div class="post">
			<div class="entry">
				<?php echo $log_content; ?>
				<?php blog_att($logid); ?>
			</div>
			<?php blog_comments($comments,$params,$logid); ?>
			<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
		</div>
		<?php include View::getView('side'); ?>
	</div>
</div>
<?php include View::getView('footer');?>