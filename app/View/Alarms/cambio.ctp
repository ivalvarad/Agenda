<br><br><br><br><br><br><br>
<div class="alarms form">
<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>
		<legend><?php echo __('Editar Alarma'); ?></legend>
		<?php
			 echo $this->Form->input('id');
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
			<?php foreach ($sounds as $soud): ?>
						<audio src="/Agendaapp/files/<?php echo ($sound['Sound']['id']); ?>.mp3" controls > </audio>
			<?php endforeach; ?>
	
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'cambiar_sonido')); ?></li>

	</ul>
</div>
