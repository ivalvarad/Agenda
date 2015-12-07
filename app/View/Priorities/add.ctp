<br><br><br><br><br><br><br>
<div class="priorities form">
<?php echo $this->Form->create('Priority'); ?>
	<fieldset>
		<legend><?php echo __('Crear prioridad'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label'=>'Nombre'));
		echo $this->Form->input('description', array('label'=>'Descripción'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Prioridades'), array('action' => 'index')); ?></li>
	</ul>
</div>
