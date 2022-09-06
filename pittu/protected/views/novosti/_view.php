<?php
/* @var $this NovostiController */
/* @var $data Novosti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_novost')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_novost), array('view', 'id'=>$data->id_novost)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_zagolovok')); ?>:</b>
	<?php echo CHtml::encode($data->tj_zagolovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_zagolovok')); ?>:</b>
	<?php echo CHtml::encode($data->ru_zagolovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_zagolovok')); ?>:</b>
	<?php echo CHtml::encode($data->en_zagolovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text')); ?>:</b>
	<?php echo CHtml::encode($data->en_text); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sanai_hamroh')); ?>:</b>
	<?php echo CHtml::encode($data->sanai_hamroh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prosmotr')); ?>:</b>
	<?php echo CHtml::encode($data->prosmotr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	*/ ?>

</div>