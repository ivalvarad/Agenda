<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar mi usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label'=>'Nombre'));
		echo $this->Form->input('lastname', array('label'=>'Apellido(s)'));
		//echo $this->Form->input('username');
		echo $this->Form->input('password', array('label'=>'Contraseña'));
		echo $this->Form->input('password_confirm', array('type' => 'password', 'label'=>'Confirmar contraseña'));
		echo $this->Form->input('email', array('label'=>'Correo'));
		//echo $this->Form->input('picture');
		echo $this->Form->input('archivo', array('type' => 'file', 'label'=>'Fotografía:'));
		echo $this->Form->input('message', array('label'=>'Mensaje personal'));
		echo $this->Form->input('timezone', array('label'=>'Zona horaria'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Eliminar mi usuario'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Está segur@ de que desea eliminar su usuario?'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver mi usuario'), array('action' => 'view',$this->Form->value('User.id'))); ?></li>
	</ul>
</div>
