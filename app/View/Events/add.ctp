<div class="events form">
<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="container-fluid">
			<div class="panel panel-info col-sm-8">
				<div class="panel-heading" align="center"><h4><?php echo __('Crear Evento'); ?></h4></div>
				<br/>
				<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Crear Evento'); ?></legend>
	<?php
		echo $this->Form->input('startdate', array('label'=>'Fecha inicial &nbsp;&nbsp;'));
		echo $this->Form->input('enddate', array('label'=>'Fecha final &nbsp;&nbsp;'));
		echo $this->Form->input('description', array('label'=>'Descripción &nbsp;&nbsp;'));
		$estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado &nbsp;&nbsp;');
		echo $this->Form->input('state', array('type' => 'select', 'options' => $estados, 'label'=>'Estado &nbsp;&nbsp;'));
		echo $this->Form->input('category_id', array('type' => 'select', 'options' => $categories, 'label' => 'Categoría &nbsp;&nbsp;'));
		echo $this->Form->input('priority_id', array('type' => 'select', 'options' => $priorities, 'label' => 'Prioridad &nbsp;&nbsp;'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
				<br/>
			</div>
			<div align="left" class="col-sm-3">
		
	<h5><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Listar Eventos'), array('action' => 'index')); ?></h5>
	
		</div>
		</div>
	</div>