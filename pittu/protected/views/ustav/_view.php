<?php
/* @var $this UstavController */
/* @var $data Ustav */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ustav')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ustav), array('view', 'id'=>$data->id_ustav)); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_ustavinfo')); ?>:</b>
	<?php echo CHtml::encode($data->tj_ustavinfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_ustavinfo')); ?>:</b>
	<?php echo CHtml::encode($data->ru_ustavinfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_ustavinfo')); ?>:</b>
	<?php echo CHtml::encode($data->en_ustavinfo); ?>
	<br />

	*/ ?>

</div>