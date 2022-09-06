<?php
/* @var $this MagistraturaController */
/* @var $model Magistratura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_mag'); ?>
		<?php echo $form->textField($model,'id_mag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_ixtisos'); ?>
		<?php echo $form->textArea($model,'tj_ixtisos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_ruzona'); ?>
		<?php echo $form->textArea($model,'tj_ruzona',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_goibona'); ?>
		<?php echo $form->textArea($model,'tj_goibona',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_bujavi'); ?>
		<?php echo $form->textArea($model,'tj_bujavi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_shartnomavi'); ?>
		<?php echo $form->textArea($model,'tj_shartnomavi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_ixtisos'); ?>
		<?php echo $form->textArea($model,'ru_ixtisos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_ruzona'); ?>
		<?php echo $form->textArea($model,'ru_ruzona',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_goibona'); ?>
		<?php echo $form->textArea($model,'ru_goibona',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_bujavi'); ?>
		<?php echo $form->textArea($model,'ru_bujavi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_shartnomavi'); ?>
		<?php echo $form->textArea($model,'ru_shartnomavi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_ixtisos'); ?>
		<?php echo $form->textArea($model,'en_ixtisos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_ruzona'); ?>
		<?php echo $form->textArea($model,'en_ruzona',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_goibona'); ?>
		<?php echo $form->textArea($model,'en_goibona',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_bujavi'); ?>
		<?php echo $form->textArea($model,'en_bujavi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_shartnomavi'); ?>
		<?php echo $form->textArea($model,'en_shartnomavi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->