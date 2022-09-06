<?php
/* @var $this TarihController */
/* @var $model Tarih */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarih-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_zagolovok'); ?>
		<?php echo $form->textArea($model,'tj_zagolovok',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_zagolovok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_zagolovok'); ?>
		<?php echo $form->textArea($model,'ru_zagolovok',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_zagolovok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_zagolovok'); ?>
		<?php echo $form->textArea($model,'en_zagolovok',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_zagolovok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_text'); ?>
		<?php echo $form->textArea($model,'tj_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_text'); ?>
		<?php echo $form->textArea($model,'ru_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_text'); ?>
		<?php echo $form->textArea($model,'en_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_text'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->