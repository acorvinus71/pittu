<?php
/* @var $this ImtihonController */
/* @var $data Imtihon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_imtihon')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_imtihon), array('view', 'id'=>$data->id_imtihon)); ?>
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
	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_inf')); ?>:</b>
	<?php echo CHtml::encode($data->tj_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_inf')); ?>:</b>
	<?php echo CHtml::encode($data->ru_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_inf')); ?>:</b>
	<?php echo CHtml::encode($data->en_inf); ?>
	<br />

	*/ ?>

</div>