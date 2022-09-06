<?php
/* @var $this TamosController */
/* @var $data Tamos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tamos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tamos), array('view', 'id'=>$data->id_tamos)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text')); ?>:</b>
	<?php echo CHtml::encode($data->en_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_zag')); ?>:</b>
	<?php echo CHtml::encode($data->tj_zag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_zag')); ?>:</b>
	<?php echo CHtml::encode($data->ru_zag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_zag')); ?>:</b>
	<?php echo CHtml::encode($data->en_zag); ?>
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

	*/ ?>

</div>