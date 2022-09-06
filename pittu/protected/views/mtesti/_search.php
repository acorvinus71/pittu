<?php
/* @var $this MtestiController */
/* @var $model Mtesti */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_mtesti'); ?>
		<?php echo $form->textField($model,'id_mtesti'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mtesti'); ?>
		<?php echo $form->textArea($model,'mtesti',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maksad'); ?>
		<?php echo $form->textArea($model,'maksad',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ahborot'); ?>
		<?php echo $form->textArea($model,'ahborot',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doc'); ?>
		<?php echo $form->textField($model,'doc',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soxt'); ?>
		<?php echo $form->textField($model,'soxt',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vazifa'); ?>
		<?php echo $form->textArea($model,'vazifa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jadval'); ?>
		<?php echo $form->textArea($model,'jadval',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->