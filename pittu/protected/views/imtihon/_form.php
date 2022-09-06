<?php
/* @var $this ImtihonController */
/* @var $model Imtihon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imtihon-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textArea($model,'img',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_inf'); ?>
		<?php echo $form->textArea($model,'tj_inf',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_inf'); ?>
		<?php echo $form->textArea($model,'ru_inf',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_inf'); ?>
		<?php echo $form->textArea($model,'en_inf',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_inf'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->