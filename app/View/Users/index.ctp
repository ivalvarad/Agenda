<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; Usuarios</h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('id'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('name'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('lastname'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('email'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('picture'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('message'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('timezone'); ?></th>
				<th style="text-align: center;" class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['picture']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['message']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['timezone']); ?>&nbsp;</td>
					<td class="actions" style="text-align: center;">
						<div class="btn-group" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
								</button>
							</div>
						</div>			
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p style="text-align: center;">
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, mostrando {:current} usuarios de {:count} en total, empezando en {:start} y terminando en {:end}')
			));
			?>	</p>
			<div class="paging" style="text-align: center;">
				<nav>
					<ul class="pager">
						<li>
							<?php 
							echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
							?>
						</li>
						<li>
							<?php 
							echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
							?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="actions">
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
		</div>
