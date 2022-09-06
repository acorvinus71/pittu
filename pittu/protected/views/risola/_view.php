<?php
/* @var $this RisolaController */
/* @var $data Risola */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_risola')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_risola), array('view', 'id'=>$data->id_risola)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->tj_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->ru_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->en_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_info')); ?>:</b>
	<?php echo CHtml::encode($data->tj_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_info')); ?>:</b>
	<?php echo CHtml::encode($data->ru_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_info')); ?>:</b>
	<?php echo CHtml::encode($data->en_info); ?>
	<br />


</div>