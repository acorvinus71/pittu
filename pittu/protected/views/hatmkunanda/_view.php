<?php
/* @var $this HatmkunandaController */
/* @var $data Hatmkunanda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hatm')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hatm), array('view', 'id'=>$data->id_hatm)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fio')); ?>:</b>
	<?php echo CHtml::encode($data->fio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ixtisos')); ?>:</b>
	<?php echo CHtml::encode($data->ixtisos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soli_hatm')); ?>:</b>
	<?php echo CHtml::encode($data->soli_hatm); ?>
	<br />


</div>