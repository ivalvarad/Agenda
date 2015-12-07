<br><br><br><br><br><br><br>
<div class="alarms view">
<h2><?php echo __('Alarma'); ?></h2>
	<dl>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['date']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Sonido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alarm['Sound']['id'], array('controller' => 'sounds', 'action' => 'view', $alarm['Sound']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alarm['Event']['id'], array('controller' => 'events', 'action' => 'view', $alarm['Event']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Alarma'), array('action' => 'edit', $alarm['Alarm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Alarm'), array('action' => 'delete', $alarm['Alarm']['id']), array('confirm' => __('Está seguro de que desea eliminar la alarma?'))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Alarms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Alarm'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Eventos'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Evento'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
