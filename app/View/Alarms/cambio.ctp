<div class="alarms form">
<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="container-fluid">
			<div class="panel panel-info col-sm-8">
				<div class="panel-heading" align="center"><h4><?php echo __('Crear Alarma'); ?></h4></div>
<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>

		<legend><?php echo __('Editar Alarma'); ?></legend>
		<?php
			 echo $this->Form->input('id');
			 $estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado');
			 echo $this->Form->input('state', array('type' => 'select', 'options' => $estados, 'label'=>'Estado'));
			 echo $this->Form->input('date', array('label' => 'Fecha'));
			 echo $this->Form->input('sound_id', array('label' => 'Sonido'));
			 $this->Form->input('event_id', array('label' => 'Evento'));
		?>

	</fieldset>

<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-info')); ?>
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

</div>
</div>
</div>
</div>
</div>