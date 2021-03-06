
<?php //$this->beginContent(); ?>
<?php $this->beginContent('//layouts/Xportlet/mainXportlet'); ?>
<!--------------------->
layout: sidebar.php
<!--------------------->
<?php if(Yii::app()->layout=='print'): ?>

	<?php echo $content; ?>

<?php else: ?>

	<div class="container_16">
		<div class="grid_3 alpha">
			<?php foreach($this->leftPortlets as $class=>$properties) $this->widget($class,$properties); ?>
		</div>
		<div class="grid_10">
			<?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs)); ?>
			<?php echo $content; ?>
		</div>
		<div class="grid_3 omega">
			<?php foreach($this->rightPortlets as $class=>$properties) $this->widget($class,$properties); ?>
		</div>
	</div>
	<div class="clear"></div>

<?php endif; ?>

<?php $this->endContent(); ?>