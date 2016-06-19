<div class="container-fluid mgt80">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6">Categories management table</div>
              <div class="col-md-6 alignRight">
                <?php echo $this->Html->link (
                  '<i class="fa fa-user-plus"></i> Create category',
                  array (
                    'controller' => 'categories',
                    'action' => 'add'
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
			<div class="flash alignCenter">
				<?php echo $this->Session->flash(); ?>
			</div>
          	<table id="zctb" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	            <col width="20%"></col>
	            <col width="20%"></col>
          		<col width="20%"></col>
	            <col width="20%"></col>
	            <col width="20%"></col>
				<thead>
					<tr>
						<th>Category Name</th>
						<th>Description</th>
						<th>SEO - Description</th>
						<th>SEO - Keyword</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($categories as $category): ?>
					<tr>
						<td> <?php
								echo $this->Html->link ( $category ['Category'] ['category_name'], array (
										'controller' => 'categories',
										'action' => 'view',
										$category ['Category'] ['id']
								) );
							?>
						</td>
						<td> <?php echo $category ['Category'] ['description']; ?></td>
						<td> <?php echo $category ['Category'] ['seo_description']; ?></td>
						<td> <?php echo $category ['Category'] ['seo_keyword']; ?></td>
						<td>
							<div class="row">
		                      	<div class="col-md-12">
			                        <div class="col-md-6">
										<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
										<?php
											echo $this->Html->link (
												'Sửa',
												array (
													'controller' => 'categories',
													'action' => 'edit',
													$category ['Category'] ['id']
												)
											);
										?>
			                        </div>
			                        <div class="col-md-6">
										<?php
											echo '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ';
											echo $this->Form->postLink (
												'Xóa',
												array (
													'controller' => 'categories',
													'action' => 'delete',
													$category ['Category'] ['id']
												),
												array (
													'confirm' => 'Bạn có chắc chắn muốn xóa danh mục: ' . $category ['Category'] ['category_name'] . '?'
												)
											);
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