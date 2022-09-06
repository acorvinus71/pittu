<?php
/* @var $this NovostiController */
/* @var $model Novosti */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_novost'); ?>
		<?php echo $form->textField($model,'id_novost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_zagolovok'); ?>
		<?php echo $form->textArea($model,'tj_zagolovok',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_zagolovok'); ?>
		<?php echo $form->textArea($model,'ru_zagolovok',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_zagolovok'); ?>
		<?php echo $form->textArea($model,'en_zagolovok',array('rows'=>6, 'cols'=>50)); ?>
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
		<?php echo $form->label($model,'sanai_hamroh'); ?>
		<?php echo $form->textField($model,'sanai_hamroh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prosmotr'); ?>
		<?php echo $form->textField($model,'prosmotr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img'); ?>
		<?php echo $form->textArea($model,'img',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->