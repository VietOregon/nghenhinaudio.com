<div class="container mgt20">
	<h1 class="pull-left">Nhóm sản phẩm</h1>
</div>
<div class="flash alignCenter">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="container">
	<div class="col-md-12">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active" style="float: right;"><?php echo $this->Html->link('Thêm sản phẩm', array ('controller' => 'products', 'action' => 'add'), array('style'=>'cursor: auto!important;')); ?></li>
			</ul>
		</div>
		<div class="panel panel-grey margin-bottom-40">
			<table class="table table-hover">
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
						<th colspan="2" class="alignCenter">Action</th>
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
						</td>
						<td align="center">
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
						</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>