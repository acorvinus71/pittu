<?php
/* @var $this MagistraturaController */
/* @var $data Magistratura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mag')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mag), array('view', 'id'=>$data->id_mag)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_ixtisos')); ?>:</b>
	<?php echo CHtml::encode($data->tj_ixtisos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_ruzona')); ?>:</b>
	<?php echo CHtml::encode($data->tj_ruzona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_goibona')); ?>:</b>
	<?php echo CHtml::encode($data->tj_goibona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_bujavi')); ?>:</b>
	<?php echo CHtml::encode($data->tj_bujavi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_shartnomavi')); ?>:</b>
	<?php echo CHtml::encode($data->tj_shartnomavi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_ixtisos')); ?>:</b>
	<?php echo CHtml::encode($data->ru_ixtisos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_ruzona')); ?>:</b>
	<?php echo CHtml::encode($data->ru_ruzona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_goibona')); ?>:</b>
	<?php echo CHtml::encode($data->ru_goibona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_bujavi')); ?>:</b>
	<?php echo CHtml::encode($data->ru_bujavi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_shartnomavi')); ?>:</b>
	<?php echo CHtml::encode($data->ru_shartnomavi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_ixtisos')); ?>:</b>
	<?php echo CHtml::encode($data->en_ixtisos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_ruzona')); ?>:</b>
	<?php echo CHtml::encode($data->en_ruzona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_goibona')); ?>:</b>
	<?php echo CHtml::encode($data->en_goibona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_bujavi')); ?>:</b>
	<?php echo CHtml::encode($data->en_bujavi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_shartnomavi')); ?>:</b>
	<?php echo CHtml::encode($data->en_shartnomavi); ?>
	<br />

	*/ ?>

</div>