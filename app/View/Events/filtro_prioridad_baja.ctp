
<div class="events index">

	<h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp; Agenda</h2>
	<br/>
	<div class="actions">
		<h5><span class="glyphicon glyphicon-check" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Crear Evento'), array('action' => 'add')); ?></h5>
	</div>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Fecha inicial'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Fecha final'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Descripción'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Estado'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Categoría'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Prioridad'); ?></th>
				<th style="text-align: center;" class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($prioritiesBaja as $event): ?>
				<?php 
					//debug($users);
					$pe = false;
					foreach($users as $user):
						if ( ($user['User']['id'] === $event['Event']['user_id']) && ($user['User']['username'] === $this->Session->read('Auth.User.User.username')) ){
							$pe = true;
						}
					endforeach;
					//if($user['User']['username'] === $this->Session->read('Auth.User.User.username')) { 
					if($pe === true){
				?>
				<tr>
					<td><?php echo h($event['Event']['startdate']); ?>&nbsp;</td>
					<td><?php echo h($event['Event']['enddate']); ?>&nbsp;</td>
					<td><?php echo h($event['Event']['description']); ?>&nbsp;</td>
					<td><?php echo h($event['Event']['state']); ?>&nbsp;</td>
					<td><?php echo h($event['Category']['name']); ?>&nbsp;</td>
					<td><?php echo h($event['Priority']['name']); ?>&nbsp;</td>
					<td class="actions" style="text-align: center;">

						<div class="btn-group" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $event['Event']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $event['Event']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Está segur@ de que desea eliminar el evento?'))); ?>
								</button>
							</div>
						</div>	
					</td>
				</tr>
				<?php } ?>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
	<?php /*
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		)); */
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





