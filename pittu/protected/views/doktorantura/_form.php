<?php
/* @var $this DoktoranturaController */
/* @var $model Doktorantura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doktorantura-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'shifr'); ?>
		<?php echo $form->textArea($model,'shifr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shifr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_ilm'); ?>
		<?php echo $form->textArea($model,'tj_ilm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_ilm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_ilm'); ?>
		<?php echo $form->textArea($model,'ru_ilm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_ilm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_ilm'); ?>
		<?php echo $form->textArea($model,'en_ilm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_ilm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->