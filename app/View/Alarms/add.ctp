<br><br><br><br><br><br><br>
<div class="alarms form">
<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>
		<legend><?php echo __('Crear Alarma'); ?></legend>
	<?php
		$estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado');
		echo $this->Form->input('state', array('type' => 'select', 'options' => $estados, 'label'=>'Estado'));
		echo $this->Form->input('date', array('label' => 'Fecha'));
		echo $this->Form->input('sound_id', array('label' => 'Sonido'));
		echo $this->Form->input('event_id', array('label' => 'Evento'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Alarmas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Eventos'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evento'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>



















