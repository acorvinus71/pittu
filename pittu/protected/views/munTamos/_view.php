<?php
/* @var $this MunTamosController */
/* @var $data MunTamos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tam')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tam), array('view', 'id'=>$data->id_tam)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idora')); ?>:</b>
	<?php echo CHtml::encode($data->idora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dop')); ?>:</b>
	<?php echo CHtml::encode($data->dop); ?>
	<br />


</div>