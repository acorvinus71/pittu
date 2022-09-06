<?php
/* @var $this TamosController */
/* @var $model Tamos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tamos'); ?>
		<?php echo $form->textField($model,'id_tamos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_zagalovok'); ?>
		<?php echo $form->textArea($model,'tj_zagalovok',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_zagalovok'); ?>
		<?php echo $form->textArea($model,'ru_zagalovok',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_zagalovok'); ?>
		<?php echo $form->textArea($model,'en_zagalovok',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img'); ?>
		<?php echo $form->textArea($model,'img',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_text'); ?>
		<?php echo $form->textArea($model,'tj_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_text'); ?>
		<?php echo $form->textArea($model,'ru_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_text'); ?>
		<?php echo $form->textArea($model,'en_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_zag'); ?>
		<?php echo $form->textArea($model,'tj_zag',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_zag'); ?>
		<?php echo $form->textArea($model,'ru_zag',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_zag'); ?>
		<?php echo $form->textArea($model,'en_zag',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_info'); ?>
		<?php echo $form->textArea($model,'tj_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_info'); ?>
		<?php echo $form->textArea($model,'ru_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_info'); ?>
		<?php echo $form->textArea($model,'en_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->