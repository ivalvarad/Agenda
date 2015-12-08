<div class="users view">
<h2><?php echo __('Mi usuario'); ?></h2>

<div class="container">
	<div class="row">
	<!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad row col-centered text-center" > -->
	<div class="row toppad">
	<div class="panel panel-info">
		<div class="panel-heading">
		  <h3 class="panel-title"> <?php echo h($user['User']['username']); ?> </h3>
		</div>
        <div class="container panel-body">
			<?php 
				if($user['User']['picture'] !== null){
			?>
			<div class="row">
				<div class="col-md-3 col-lg-3 " align="center"> <?php echo $this->Html->image($user['User']['picture'], array('class'=> "img-circle img-responsive"));?> </div>
			</div>
			<?php 
				}
			?>
			<div class="col-md-9 col-lg-9 "> 
			  <table class="table table-user-information">
				<tbody>
				 <tr>
					<td>Nombre: </td>
					<td> <?php echo $user['User']['name'] ?> </td>
				  </tr>
				  <tr>
					<td>Apellidos: </td>
					<td> <?php echo $user['User']['lastname'] ?> </td>
				  </tr>
				  <tr>
					<td>Acerca de: </td>
					<td> <?php echo $user['User']['message'] ?> </td>
				  </tr>
				  <tr>
					<td>Zona Horaria: </td>
					<td> <?php echo $user['User']['timezone'] ?> </td>
				  </tr>
				  <tr>
					<td>Email</td>
					<td> <?php echo $user['User']['email'] ?> </td>
				  </tr>
				</tbody>
			  </table>
				<a><?php echo $this->Html->link(__('Editar mi usuario'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-primary')); ?> </a>
				<a><?php echo $this->Form->postLink(__('Eliminar mi usuario'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-primary'), array('confirm' => __('Está segur@ de que desea eliminar su usuario?'))); ?> </a>
			</div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>