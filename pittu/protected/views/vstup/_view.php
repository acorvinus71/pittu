<?php
/* @var $this VstupController */
/* @var $data Vstup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vstup')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vstup), array('view', 'id'=>$data->id_vstup)); ?>
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


</div>