<?php
/* @var $this HatmkunandaController */
/* @var $model Hatmkunanda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hatmkunanda-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fio'); ?>
		<?php echo $form->textField($model,'fio',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'fio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ixtisos'); ?>
		<?php echo $form->textField($model,'ixtisos',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ixtisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soli_hatm'); ?>
		<?php echo $form->textField($model,'soli_hatm',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'soli_hatm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->