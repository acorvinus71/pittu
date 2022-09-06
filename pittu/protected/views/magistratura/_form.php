<?php
/* @var $this MagistraturaController */
/* @var $model Magistratura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'magistratura-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_ixtisos'); ?>
		<?php echo $form->textArea($model,'tj_ixtisos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_ixtisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_ruzona'); ?>
		<?php echo $form->textArea($model,'tj_ruzona',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_ruzona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_goibona'); ?>
		<?php echo $form->textArea($model,'tj_goibona',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_goibona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_bujavi'); ?>
		<?php echo $form->textArea($model,'tj_bujavi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_bujavi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_shartnomavi'); ?>
		<?php echo $form->textArea($model,'tj_shartnomavi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_shartnomavi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_ixtisos'); ?>
		<?php echo $form->textArea($model,'ru_ixtisos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_ixtisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_ruzona'); ?>
		<?php echo $form->textArea($model,'ru_ruzona',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_ruzona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_goibona'); ?>
		<?php echo $form->textArea($model,'ru_goibona',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_goibona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_bujavi'); ?>
		<?php echo $form->textArea($model,'ru_bujavi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_bujavi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_shartnomavi'); ?>
		<?php echo $form->textArea($model,'ru_shartnomavi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_shartnomavi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_ixtisos'); ?>
		<?php echo $form->textArea($model,'en_ixtisos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_ixtisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_ruzona'); ?>
		<?php echo $form->textArea($model,'en_ruzona',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_ruzona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_goibona'); ?>
		<?php echo $form->textArea($model,'en_goibona',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_goibona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_bujavi'); ?>
		<?php echo $form->textArea($model,'en_bujavi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_bujavi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_shartnomavi'); ?>
		<?php echo $form->textArea($model,'en_shartnomavi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_shartnomavi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->