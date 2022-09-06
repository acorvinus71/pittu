<?php
/* @var $this StrukturaController */
/* @var $model Struktura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'struktura-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_zagalovok'); ?>
		<?php echo $form->textArea($model,'tj_zagalovok',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_zagalovok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_zagalovok'); ?>
		<?php echo $form->textArea($model,'ru_zagalovok',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_zagalovok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_zagalovok'); ?>
		<?php echo $form->textArea($model,'en_zagalovok',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_zagalovok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textArea($model,'img',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->