<?php
/* @var $this FakultetController */
/* @var $model Fakultet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fakultet-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'tj_info'); ?>
		<?php echo $form->textArea($model,'tj_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_info'); ?>
		<?php echo $form->textArea($model,'ru_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_info'); ?>
		<?php echo $form->textArea($model,'en_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_infofak'); ?>
		<?php echo $form->textArea($model,'tj_infofak',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_infofak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_infofak'); ?>
		<?php echo $form->textArea($model,'ru_infofak',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_infofak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_infofak'); ?>
		<?php echo $form->textArea($model,'en_infofak',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_infofak'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->