<div class="categories index">
	<h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span> &nbsp; <?php echo __('Categorías'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0" border="1">
		<thead>
			<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('Descripción'); ?></th>
				<th style="text-align: center;" class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($categories as $category): ?>
				<tr>
					<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
					<td><?php echo h($category['Category']['description']); ?>&nbsp;</td>
					<td style="text-align: center;" class="actions">

						<div class="btn-group" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									<?php echo $this->Html->link(__(''), array('action' => 'view', $category['Category']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									<?php echo $this->Html->link(__(''), array('action' => 'edit', $category['Category']['id'])); ?>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Está segur@ de que desea eliminar la categoría?'))); ?>
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
		<h4><span class="glyphicon glyphicon-check" aria-hidden="true"></span> &nbsp;<?php echo $this->Html->link(__('Crear Categoría'), array('action' => 'add')); ?></h4>
	</div>
