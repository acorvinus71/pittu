<?php
/* @var $this KonferenceController */
/* @var $data Konference */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_konf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_konf), array('view', 'id'=>$data->id_konf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_tema')); ?>:</b>
	<?php echo CHtml::encode($data->tj_tema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_tema')); ?>:</b>
	<?php echo CHtml::encode($data->ru_tema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_tema')); ?>:</b>
	<?php echo CHtml::encode($data->en_tema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_adres')); ?>:</b>
	<?php echo CHtml::encode($data->tj_adres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_adres')); ?>:</b>
	<?php echo CHtml::encode($data->ru_adres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_adres')); ?>:</b>
	<?php echo CHtml::encode($data->en_adres); ?>
	<br />


</div>