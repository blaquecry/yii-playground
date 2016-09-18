<?php if( Yii::app()->request->isAjaxRequest ) {  echo "test: ini dari ajax request"; ?>  
<style>
.form{ font-size: 62.5%; }
</style>
<?php } ?>			

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'TblUserMysql',
	'enableAjaxValidation'=>true,   //jika "true" maka akan submit via ajax tanpa validasi
	'enableClientValidation'=>true,
	'focus'=>'input:text[value=""]:first',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php //echo CHtml::hiddenField('YII_CSRF_TOKEN',Yii::app()->request->csrfToken); ?> <!--- TOKEN-->
  
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role'); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>
    <!-------------  tambah utk field(ket) ------------------------->
    <!--<div class="row">
		<?php //echo $form->labelEx($model,'ket'); ?>
		<?php //echo $form->textField($model,'ket'); ?>
		<?php //echo $form->error($model,'ket'); ?>
	</div>-->
																		
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
											
<?php $this->endWidget(); ?>

</div><!-- form -->

<div class="tpanel left">
	<div class="toggle btn"><?php echo Yii::t('ui','View Code'); ?></div>
	<?php $this->render_script(__FILE__); /* from AdminController*/ ?>
</div>