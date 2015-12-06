<br><br><br><br><br><br><br>
<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('startdate');
		echo $this->Form->input('enddate');
		echo $this->Form->input('description');
		$estados = array('Activo' => 'Activo', 'Pausado' => 'Pausado');
		echo $this->Form->input('state', array('type' => 'select', 'options' => $estados));
		echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $usuario['User']['id']));
		echo $this->Form->input('category_id', array('type' => 'select', 'options' => $categories, 'label' => 'Categoría:'));
		echo $this->Form->input('priority_id', array('type' => 'select', 'options' => $priorities, 'label' => 'Prioridad:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
