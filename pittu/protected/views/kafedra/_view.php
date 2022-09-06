<?php
/* @var $this KafedraController */
/* @var $data Kafedra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kafedra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kafedra), array('view', 'id'=>$data->id_kafedra)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_infokaf')); ?>:</b>
	<?php echo CHtml::encode($data->tj_infokaf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_infokaf')); ?>:</b>
	<?php echo CHtml::encode($data->ru_infokaf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_infokaf')); ?>:</b>
	<?php echo CHtml::encode($data->en_infokaf); ?>
	<br />

	*/ ?>

</div>