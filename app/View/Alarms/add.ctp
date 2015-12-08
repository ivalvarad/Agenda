<div class="alarms form">
<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="container-fluid">
			<div class="panel panel-info col-sm-8">
				<div class="panel-heading" align="center"><h4><?php echo __('Crear Alarma'); ?></h4></div>
				<br/>
				<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>
	<?php
		$estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado');
		echo $this->Form->input('state', array('type' => 'select', 'options' => $estados, 'label'=>'Estado&nbsp;&nbsp;'));
		echo $this->Form->input('date', array('label' => 'Fecha&nbsp;&nbsp;'));
		echo $this->Form->input('sound_id', array('label' => 'Sonido&nbsp;&nbsp;'));
		echo $this->Form->input('event_id', array('label' => 'Evento&nbsp;&nbsp;'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
				<br/>
			</div>
			<div align="left" class="col-sm-3">
		
	<h5><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Listar Alarmas'), array('action' => 'index')); ?></h5>
	<h5><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Listar Eventos'), array('controller' => 'events', 'action' => 'index')); ?></h5>
	<h5><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Crear Evento'), array('controller' => 'events', 'action' => 'add')); ?></h5>
	
		</div>
		</div>
	</div>
</div>



















