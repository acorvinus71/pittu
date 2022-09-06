<?php
/* @var $this TehnController */
/* @var $model Tehn */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tehn-form',
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
		<?php echo $form->labelEx($model,'tj_text1'); ?>
		<?php echo $form->textArea($model,'tj_text1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_text1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_text1'); ?>
		<?php echo $form->textArea($model,'ru_text1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_text1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_text1'); ?>
		<?php echo $form->textArea($model,'en_text1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_text1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img1'); ?>
		<?php echo $form->textArea($model,'img1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_text2'); ?>
		<?php echo $form->textArea($model,'tj_text2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_text2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_text2'); ?>
		<?php echo $form->textArea($model,'ru_text2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_text2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_text2'); ?>
		<?php echo $form->textArea($model,'en_text2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_text2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img2'); ?>
		<?php echo $form->textArea($model,'img2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_text3'); ?>
		<?php echo $form->textArea($model,'tj_text3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_text3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_text3'); ?>
		<?php echo $form->textArea($model,'ru_text3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_text3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_text3'); ?>
		<?php echo $form->textArea($model,'en_text3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_text3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img3'); ?>
		<?php echo $form->textArea($model,'img3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_text4'); ?>
		<?php echo $form->textArea($model,'tj_text4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_text4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_text4'); ?>
		<?php echo $form->textArea($model,'ru_text4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_text4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_text4'); ?>
		<?php echo $form->textArea($model,'en_text4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_text4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img4'); ?>
		<?php echo $form->textArea($model,'img4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'img4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tj_text5'); ?>
		<?php echo $form->textArea($model,'tj_text5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tj_text5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ru_text5'); ?>
		<?php echo $form->textArea($model,'ru_text5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ru_text5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_text5'); ?>
		<?php echo $form->textArea($model,'en_text5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'en_text5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->