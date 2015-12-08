<div class="events view">
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div align="center" class="container-fluid">
			<div class="panel panel-info col-sm-8">
				<div class="panel-heading"><h4><?php echo __('Evento'); ?></h4></div>
				<br/>
				<table>
					<tr>
						<td><b><?php echo __('Fecha inicial'); ?>&nbsp;&nbsp;</b></td>
						<td align="right"><?php echo h($event['Event']['startdate']); ?></td>
					</tr>
					<tr>
						<td><b><?php echo __('Fecha final'); ?>&nbsp;&nbsp;</b></td>
						<td align="right"><?php echo h($event['Event']['enddate']); ?> </td>
					</tr>
					<tr>
						<td><b><?php echo __('Descripción'); ?></b> &nbsp;&nbsp;</td>
						<td align="right"><?php echo h($event['Event']['description']); ?> </td>
					</tr>
					<tr>
						<td><b><?php echo __('Estado'); ?></b> &nbsp;&nbsp;</td>
						<td align="right"><?php echo h($event['Event']['description']); ?> </td>
					</tr>
					<tr>
						<td><b><?php echo __('Categoría'); ?></b> &nbsp;&nbsp;</td>
						<td align="right"><?php echo h($event['Category']['name']); ?> </td>
					</tr>
					<tr>
						<td><b><?php echo __('Prioridad'); ?></b> &nbsp;&nbsp;</td>
						<td align="right"><?php echo h($event['Priority']['name']); ?> </td>
					</tr>
					</table>		
					<br/>
			</div>
			<div align="left" class="col-sm-3">
		<h5><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Editar Evento'), array('action' => 'edit', $event['Event']['id'])); ?></h5>
	<h5><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;<?php echo $this->Form->postLink(__('Eliminar Evento'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Está segur@ de que desea eliminar el evento?'))); ?></h5>
	<h5><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Listar Eventos'), array('action' => 'index')); ?></h5>
	<h5><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Crear Evento'), array('action' => 'add')); ?></h5>
		</div>
		</div>

	</div>
	
</div>

<div class="actions">
	
</div>
