<?php
/* @var $this HatmkunandaController */
/* @var $model Hatmkunanda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_hatm'); ?>
		<?php echo $form->textField($model,'id_hatm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fio'); ?>
		<?php echo $form->textField($model,'fio',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ixtisos'); ?>
		<?php echo $form->textField($model,'ixtisos',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soli_hatm'); ?>
		<?php echo $form->textField($model,'soli_hatm',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->