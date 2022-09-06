<?php
/* @var $this AspiranturaController */
/* @var $data Aspirantura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_asp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_asp), array('view', 'id'=>$data->id_asp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shifr')); ?>:</b>
	<?php echo CHtml::encode($data->shifr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_ilm')); ?>:</b>
	<?php echo CHtml::encode($data->tj_ilm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_ilm')); ?>:</b>
	<?php echo CHtml::encode($data->ru_ilm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_ilm')); ?>:</b>
	<?php echo CHtml::encode($data->en_ilm); ?>
	<br />


</div>