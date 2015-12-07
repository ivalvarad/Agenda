<div class="events view">
<h2><?php echo __('Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Fecha inicial'); ?></dt>
		<dd>
			<?php echo h($event['Event']['startdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha final'); ?></dt>
		<dd>
			<?php echo h($event['Event']['enddate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($event['Event']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($event['Event']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoría'); ?></dt>
		<dd>
			<?php echo h($event['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prioridad'); ?></dt>
		<dd>
			<?php echo h($event['Priority']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Evento'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Evento'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Evento'), array('action' => 'add')); ?> </li>
	</ul>
</div>
