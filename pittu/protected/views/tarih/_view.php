<?php
/* @var $this TarihController */
/* @var $data Tarih */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tarih')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tarih), array('view', 'id'=>$data->id_tarih)); ?>
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


</div>