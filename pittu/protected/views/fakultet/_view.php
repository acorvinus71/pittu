<?php
/* @var $this FakultetController */
/* @var $data Fakultet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fakultet')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_fakultet), array('view', 'id'=>$data->id_fakultet)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_info')); ?>:</b>
	<?php echo CHtml::encode($data->tj_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_info')); ?>:</b>
	<?php echo CHtml::encode($data->ru_info); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('en_info')); ?>:</b>
	<?php echo CHtml::encode($data->en_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_infofak')); ?>:</b>
	<?php echo CHtml::encode($data->tj_infofak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_infofak')); ?>:</b>
	<?php echo CHtml::encode($data->ru_infofak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_infofak')); ?>:</b>
	<?php echo CHtml::encode($data->en_infofak); ?>
	<br />

	*/ ?>

</div>