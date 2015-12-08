<div class="events form">
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="container-fluid">
			<div class="panel panel-info col-sm-8">
				<div class="panel-heading" align="center"><h4><?php echo __('Editar Evento'); ?></h4></div>
				<br/>
				<?php echo $this->Form->create('Event'); ?>
				<fieldset>
					<?php
					echo $this->Form->input('id');echo $this->Form->input('startdate', array('label'=>'Fecha inicial &nbsp;&nbsp;'));
					echo $this->Form->input('enddate', array('label'=>'Fecha final &nbsp;&nbsp;'));
					echo $this->Form->input('description', array('label'=>'Descripción &nbsp;&nbsp;'));
					$estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado;');
					echo $this->Form->input('state', array('type' => 'select', 'options' => $estados, 'label'=>'Estado &nbsp;&nbsp;'));
					echo $this->Form->input('category_id', array('type' => 'select', 'options' => $categories, 'label' => 'Categoría &nbsp;&nbsp;'));
					echo $this->Form->input('priority_id', array('type' => 'select', 'options' => $priorities, 'label' => 'Prioridad &nbsp;&nbsp;'));
					echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $usuario['User']['id']));
					?>
				</fieldset>
				<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-info')); ?>
				<br/>
			</div>
			<div align="left" class="col-sm-3">
				<h5><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Event.id')), array('confirm' => __('Está segur@ de que desea eliminar su usuario?', $this->Form->value('Event.id')))); ?></h5>
				<h5><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Listar eventos'), array('action' => 'index')); ?></h5>
			</div>
		</div>
	</div>