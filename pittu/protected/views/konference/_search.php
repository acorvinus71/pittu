<?php
/* @var $this KonferenceController */
/* @var $model Konference */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_konf'); ?>
		<?php echo $form->textField($model,'id_konf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_tema'); ?>
		<?php echo $form->textArea($model,'tj_tema',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_tema'); ?>
		<?php echo $form->textArea($model,'ru_tema',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_tema'); ?>
		<?php echo $form->textArea($model,'en_tema',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_adres'); ?>
		<?php echo $form->textArea($model,'tj_adres',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_adres'); ?>
		<?php echo $form->textArea($model,'ru_adres',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_adres'); ?>
		<?php echo $form->textArea($model,'en_adres',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->