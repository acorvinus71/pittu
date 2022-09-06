<?php
/* @var $this TehnController */
/* @var $model Tehn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tehn'); ?>
		<?php echo $form->textField($model,'id_tehn'); ?>
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
		<?php echo $form->label($model,'tj_text1'); ?>
		<?php echo $form->textArea($model,'tj_text1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_text1'); ?>
		<?php echo $form->textArea($model,'ru_text1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_text1'); ?>
		<?php echo $form->textArea($model,'en_text1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img1'); ?>
		<?php echo $form->textArea($model,'img1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_text2'); ?>
		<?php echo $form->textArea($model,'tj_text2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_text2'); ?>
		<?php echo $form->textArea($model,'ru_text2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_text2'); ?>
		<?php echo $form->textArea($model,'en_text2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img2'); ?>
		<?php echo $form->textArea($model,'img2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_text3'); ?>
		<?php echo $form->textArea($model,'tj_text3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_text3'); ?>
		<?php echo $form->textArea($model,'ru_text3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_text3'); ?>
		<?php echo $form->textArea($model,'en_text3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img3'); ?>
		<?php echo $form->textArea($model,'img3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_text4'); ?>
		<?php echo $form->textArea($model,'tj_text4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_text4'); ?>
		<?php echo $form->textArea($model,'ru_text4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_text4'); ?>
		<?php echo $form->textArea($model,'en_text4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img4'); ?>
		<?php echo $form->textArea($model,'img4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tj_text5'); ?>
		<?php echo $form->textArea($model,'tj_text5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ru_text5'); ?>
		<?php echo $form->textArea($model,'ru_text5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_text5'); ?>
		<?php echo $form->textArea($model,'en_text5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->