<div class="container-fluid mgt80">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6">Product management table</div>
              <div class="col-md-6 alignRight">
                <?php echo $this->Html->link (
                  '<i class="fa fa-user-plus"></i> Create product',
                  array (
                    'controller' => 'products',
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
			<div class="panel panel-grey margin-bottom-40">
				<table id="zctb" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
		            <col width="10%"></col>
		            <col width="10%"></col>
		            <col width="10%"></col>
		            <col width="10%"></col>
		            <col width="10%"></col>
		            <col width="10%"></col>
		            <col width="20%"></col>
		            <col width="10%"></col>
		            <col width="10%"></col>
		            <thead>
		              <tr>
						<th>Tên sản phẩm</th>
						<th>Mã sản phẩm</th>
						<th>Nhóm sản phẩm</th>
						<th>Giá sản phẩm</th>
						<th>Thời gian bảo hành</th>
						<th>Tình trạng sản phẩm</th>
						<th>Mô tả</th>
						<th>Ghi chú</th>
						<th>Action</th>
		              </tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product): ?>
						<tr>
							<td> <?php
									echo $this->Html->link ( $product ['Product'] ['product_name'], array (
											'controller' => 'products',
											'action' => 'view',
											$product ['Product'] ['id']
									) );
								?>
							</td>
							<td> <?php echo $product ['Product'] ['product_code']; ?></td>
							<td> <?php echo $product ['Product'] ['category_name']; ?></td>
							<td> <?php echo $product ['Product'] ['product_price']; ?></td>
							<td> <?php echo $product ['Product'] ['warranty_time']; ?></td>
							<td> <?php echo $product ['Product'] ['product_status']; ?></td>
							<td> <?php echo mb_strimwidth($product ['Product'] ['description'], 0, 200, " ..."); ?></td>
							<td> <?php echo mb_strimwidth($product ['Product'] ['note'], 0, 200, " ..."); ?></td>
							<td>
								<div class="row">
			                      	<div class="col-md-12">
			                        	<div class="col-md-6">
											<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
											<?php
												echo $this->Html->link (
													'Sửa',
													array (
														'controller' => 'products',
														'action' => 'edit',
														$product ['Product'] ['id']
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
														'controller' => 'products',
														'action' => 'delete',
														$product ['Product'] ['id']
													),
													array (
														'confirm' => 'Bạn có chắc chắn muốn xóa danh mục: ' . $product ['Product'] ['product_name'] . '?'
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
</div>