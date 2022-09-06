<?php
/* @var $this DoktoranturaController */
/* @var $model Doktorantura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_dok'); ?>
		<?php echo $form->textField($model,'id_dok'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shifr'); ?>
		<?php echo $form->textArea($model,'shifr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_ilm'); ?>
		<?php echo $form->textArea($model,'tj_ilm',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_ilm'); ?>
		<?php echo $form->textArea($model,'ru_ilm',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_ilm'); ?>
		<?php echo $form->textArea($model,'en_ilm',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->