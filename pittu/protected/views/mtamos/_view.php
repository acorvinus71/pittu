<?php
/* @var $this MtamosController */
/* @var $data Mtamos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tamos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tamos), array('view', 'id'=>$data->id_tamos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kor')); ?>:</b>
	<?php echo CHtml::encode($data->kor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />


</div>