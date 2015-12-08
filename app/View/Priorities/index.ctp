<div class="priorities index">
	<h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp; <?php echo __('Prioridades'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('name'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('description'); ?></th>
				<th style="text-align: center;" class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($prioritiesAlta as $priority): ?>
				<tr>
					<td><?php echo h($priority['Priority']['name']); ?>&nbsp;</td>
					<td><?php echo h($priority['Priority']['description']); ?>&nbsp;</td>
					<td style="text-align: center;"  class="actions">
						<div class="btn-group" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									<?php echo $this->Html->link(__(''), array('action' => 'view', $priority['Priority']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									<?php echo $this->Html->link(__(''), array('action' => 'edit', $priority['Priority']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $priority['Priority']['id']), array('confirm' => __('Está segur@ de que desea eliminar la prioridad?'))); ?>
								</button>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
<tr>
<th>
</th>
</tr>

			<?php foreach ($prioritiesBajita as $priority): ?>
				<tr>
					<td><?php echo h($priority['Priority']['name']); ?>&nbsp;</td>
					<td><?php echo h($priority['Priority']['description']); ?>&nbsp;</td>
					<td style="text-align: center;"  class="actions">
						<div class="btn-group" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									<?php echo $this->Html->link(__(''), array('action' => 'view', $priority['Priority']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									<?php echo $this->Html->link(__(''), array('action' => 'edit', $priority['Priority']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $priority['Priority']['id']), array('confirm' => __('Está segur@ de que desea eliminar la prioridad?'))); ?>
								</button>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>







		</tbody>
	</table>
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
<div class="actions">
	<h4><span class="glyphicon glyphicon-check" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Crear Prioridad'), array('action' => 'add')); ?></h4>
</div>
