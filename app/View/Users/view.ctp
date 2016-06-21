<div class="container-fluid mgt80">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<?php
									echo $this->Html->link (' Users', array (
										'controller' => 'users',
										'action' => 'index'
									));
									echo ' / ' . $user['User']['username'];
								?>
							</div>
							<div class="col-md-6 alignRight">
								<i class="fa fa-edit"></i> 
								<?php echo $this->Html->link ( 
									$user['User']['username'],
									array (
										'controller' => 'users',
										'action' => 'edit',
										$user['User']['id']
									)
								); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="alignCenter">
					    <?php if(isset($errors)) {
					      echo '<ul>';
					      foreach ($errors as $error):
					          echo '<li class="error">'.$error[0].'</li>';
					      endforeach;
					      echo '</ul>';
					    }?>
					</div>
					<div class="flash">
					    <?php echo $this->Session->flash(); ?>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<col width="15%"></col>
							<col width="85%"></col>
							<tbody>
								<tr>
									<td align="right">User Id:</td>
									<td><?php echo ($user['User']['id']);  ?></td>
								</tr>
								<tr>
									<td align="right">Username:</td>
									<td><?php echo ($user['User']['username']);  ?></td>
								</tr>
								<tr>
									<td align="right">Role:</td>
									<td><?php echo ($user['User']['role']);  ?></td>
								</tr>
								<tr>
									<td align="right">Created:</td>
									<td><?php echo ($user['User']['created']);  ?></td>
								</tr>
							</tbody>
						</table>
						<div class="alignCenter">
							<?php
								echo $this->Html->link ( 'Edit profile', array (
										'controller' => 'users',
										'action' => 'edit',
										$user ['User'] ['id']
									),
									array (
										'class' => 'btn btn-primary mgr20'
									)
								);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>