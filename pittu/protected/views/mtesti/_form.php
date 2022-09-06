<?php
/* @var $this MtestiController */
/* @var $model Mtesti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mtesti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mtesti'); ?>
		<?php echo $form->textArea($model,'mtesti',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mtesti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maksad'); ?>
		<?php echo $form->textArea($model,'maksad',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'maksad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ahborot'); ?>
		<?php echo $form->textArea($model,'ahborot',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ahborot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doc'); ?>
		<?php echo $form->textField($model,'doc',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soxt'); ?>
		<?php echo $form->textField($model,'soxt',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'soxt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vazifa'); ?>
		<?php echo $form->textArea($model,'vazifa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'vazifa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jadval'); ?>
		<?php echo $form->textArea($model,'jadval',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'jadval'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->