<?php
/* @var $this BarnomaController */
/* @var $data Barnoma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bar), array('view', 'id'=>$data->id_bar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adres')); ?>:</b>
	<?php echo CHtml::encode($data->adres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />


</div>