<?php
/* @var $this MtestiController */
/* @var $data Mtesti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mtesti')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mtesti), array('view', 'id'=>$data->id_mtesti)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtesti')); ?>:</b>
	<?php echo CHtml::encode($data->mtesti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maksad')); ?>:</b>
	<?php echo CHtml::encode($data->maksad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ahborot')); ?>:</b>
	<?php echo CHtml::encode($data->ahborot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc')); ?>:</b>
	<?php echo CHtml::encode($data->doc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soxt')); ?>:</b>
	<?php echo CHtml::encode($data->soxt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vazifa')); ?>:</b>
	<?php echo CHtml::encode($data->vazifa); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jadval')); ?>:</b>
	<?php echo CHtml::encode($data->jadval); ?>
	<br />

	*/ ?>

</div>