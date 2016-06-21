<div class="container-fluid mgt80">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6">User management table</div>
              <div class="col-md-6 alignRight">
                <?php echo $this->Html->link (
                  '<i class="fa fa-user-plus"></i> Create user',
                  array (
                    'controller' => 'users',
                    'action' => 'register'
                  ),
                  array (
                    'escape' => FALSE
                  )
                ); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
			<table id="zctb" class="table table-striped table-hover table-bordered">
				<col width="10%"></col>
	            <col width="40%"></col>
	            <col width="20%"></col>
	            <col width="10%"></col>
	            <col width="20%"></col>
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Role</th>
						<th>Created</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo $user['User']['id']; ?></td>
						<td> <?php
								echo $this->Html->link ( $user ['User'] ['username'], array (
										'controller' => 'users',
										'action' => 'view',
										$user ['User'] ['id']
								) );
							?>
						</td>
						<td> <?php echo $user ['User'] ['role']; ?></td>
						<td> <?php echo $user ['User'] ['created']; ?></td>
						<td>
							<div class="row">
								<div class="col-md-12">
                        			<div class="col-md-6">
                        				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
										<?php
											echo $this->Html->link (
												'Edit',
												array (
													'action' => 'edit',
													$user ['User'] ['id']
												)
											);
										?>
                        			</div>
                        			<div class="col-md-6">
                        				<?php
											if($auth['id'] != $user ['User'] ['id']) {
												echo '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ';
												echo $this->Form->postLink (
													'Delete',
													array (
														'action' => 'delete',
														$user ['User'] ['id']
													),
													array (
														'confirm' => 'Are you sure?'
													)
												);
											}
										?>
                        			</div>
                    			</div>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>