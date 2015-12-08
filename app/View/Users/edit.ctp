<div class="users form">
	<div class="events form">
		<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="container-fluid">
				<div class="panel panel-info col-sm-8">
					<div class="panel-heading" align="center"><h4><?php echo __('Editar Usuario'); ?></h4></div>
					<br/>
					<?php echo $this->Form->create('User', array('type' => 'file')); ?>
					<fieldset>
						<?php
						echo $this->Form->input('id');
						echo $this->Form->input('name', array('label'=>'Nombre&nbsp;&nbsp'));
						echo $this->Form->input('lastname', array('label'=>'Apellido(s)&nbsp;&nbsp'));
		//echo $this->Form->input('username');
						echo $this->Form->input('password', array('label'=>'Contraseña&nbsp;&nbsp'));
						echo $this->Form->input('password_confirm', array('type' => 'password', 'label'=>'Confirmar contraseña&nbsp;&nbsp'));
						echo $this->Form->input('email', array('label'=>'Correo&nbsp;&nbsp'));
		//echo $this->Form->input('picture');
						echo $this->Form->input('archivo', array('type' => 'file', 'label'=>'Fotografía&nbsp;&nbsp'));
						echo $this->Form->input('message', array('label'=>'Mensaje personal&nbsp;&nbsp'));
						echo $this->Form->input('timezone', array('label'=>'Zona horaria&nbsp;&nbsp'));
						?>
					</fieldset>
					<?php echo $this->Form->end(__('Guardar')); ?>
					<br/>
				</div>

				<div align="left" class="col-sm-3">
					<h5><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;<?php echo $this->Form->postLink(__('Eliminar mi usuario'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Está segur@ de que desea eliminar su usuario?'))); ?></h5>
					<h5><span class="glyphicon glyphicon-search" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Ver mi usuario'), array('action' => 'view',$this->Form->value('User.id'))); ?></h5>
				</div>
			</div>
