<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List user', 'url'=>array('index')),
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'View user', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage user', 'url'=>array('admin')),
);
?>

<div class="tpanel left">
	<div class="toggle btn"><?php echo Yii::t('ui','View Controller'); ?></div>
	<?php $this->render_script(); /* from AdminController*/ ?>
</div>
<br>

<h1>Update user <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>