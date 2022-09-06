<?php
/* @var $this KonferenceController */
/* @var $model Konference */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'konference-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_tema'); ?>
		<?php echo $form->textArea($model,'tj_tema',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_tema'); ?>
		<?php echo $form->textArea($model,'ru_tema',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_tema'); ?>
		<?php echo $form->textArea($model,'en_tema',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_adres'); ?>
		<?php echo $form->textArea($model,'tj_adres',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_adres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_adres'); ?>
		<?php echo $form->textArea($model,'ru_adres',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_adres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_adres'); ?>
		<?php echo $form->textArea($model,'en_adres',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_adres'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->