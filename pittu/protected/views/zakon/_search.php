<?php
/* @var $this ZakonController */
/* @var $model Zakon */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_zakon'); ?>
		<?php echo $form->textField($model,'id_zakon'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->