<div class="alarms form">
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="container-fluid">
			<div class="panel panel-info col-sm-8">

				<div class="panel-heading" align="center"><h4><?php echo __('Editar Alarma'); ?></h4></div>
				<br/>
				<fieldset>
					<?php
					echo $this->Form->input('id');
					$estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado');
					echo $this->Form->input('state', array('type' => 'select', 'options' => $estados, 'label'=>'Estado &nbsp;&nbsp;'));
					echo $this->Form->input('date', array('label' => 'Fecha &nbsp;&nbsp;'));
					echo $this->Form->input('sound_id', array('label' => 'Sonido &nbsp;&nbsp;'));
					$this->Form->input('event_id', array('label' => 'Evento '));
					?>
				</fieldset>
				<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-info')); ?>
				<br/>
			</div>
			<div align="left" class="col-sm-3">
				<h5><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Volver'), array('action' => 'cambiar_sonido')); ?></h5>
			</div>
		</div>
	</div>

</div>

</div>
</div>
</div>
</div>
</div>