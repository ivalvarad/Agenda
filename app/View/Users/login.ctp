<div class="row">
	<div class="col-sm-4">
	</div>
	<div align="center" class="container-fluid">
		<div class="panel panel-success col-sm-4">
			<div class="panel-heading"><?php echo __('Iniciar sesión'); ?></div>


			<div class="users form">
				<?php echo $this->Flash->render('auth'); ?>
				<?php echo $this->Form->create('User'); ?>
				<fieldset>
				<legend>
					<?php echo __('Por favor ingrese su usuario y contraseña'); ?>
				</legend>
					<br/>
					<?php echo $this->Form->input('username', array('label'=>'Usuario&nbsp;&nbsp;'));
					?>
					<br/>
					<?php echo $this->Form->input('password', array('label'=>'Contraseña&nbsp;&nbsp;'));
					?>
					<br/>
				</fieldset>
				<?php echo $this->Form->end(__('Ingresar')); ?>
				<br/>
				<?php echo $this->Html->link(__('Registrarse'), array('controller' => 'users', 'action' => 'add')); ?>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
	</div>

</div>