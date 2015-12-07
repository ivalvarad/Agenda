<div class="users index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; Mi usuario</h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Apellido(s)'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Usuario'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Correo'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Mensaje'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Zona horaria'); ?></th>
				<th style="text-align: center;" class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user): ?>
			<?php 
			if($user['User']['username'] === $_SESSION['usernm']) { ?>
				<tr>
					<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['message']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['timezone']); ?>&nbsp;</td>
					<td class="actions" style="text-align: center;">
						<div class="btn-group" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Html->link(__('Expandir'), array('action' => 'view', $user['User']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Está segur@ de que desea eliminar su usuario?'))); ?>
								</button>
							</div>
						</div>			
					</td>
				</tr>
				<?php } ?>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p style="text-align: center;">
		<?php /*
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, mostrando {:current} usuarios de {:count} en total, empezando en {:start} y terminando en {:end}')
			));*/
			?>	</p>
			<div class="paging" style="text-align: center;">
				<nav>
					<ul class="pager">
						<li>
							<?php 
							echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
							?>
						</li>
						<li>
							<?php 
							echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
							?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<?php //if($this->Session->read("Auth.User.id") === null){ ?>
			<!-- <div class="actions">
				<div class="panel panel-default" style="width: 30%;">
					<div class="panel-heading">
						<h3>Otras acciones</h3>
					</div>
					<div class="panel-body">
						<ul>
							<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
						</ul>
					</div>
				</div>
			</div> -->
		<?php //} ?>
		
		
