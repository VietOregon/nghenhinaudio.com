<div class="container mgt20">
	<h1 class="pull-left">Nhóm danh mục</h1>
</div>
<div class="flash alignCenter">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="container">
	<div class="col-md-12">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active" style="float: right;"><?php echo $this->Html->link('Thêm danh mục', array ('controller' => 'categories', 'action' => 'add'), array('style'=>'cursor: auto!important;')); ?></li>
			</ul>
		</div>
		<div class="panel panel-grey margin-bottom-40">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Tên danh mục</th>
						<th>Mô tả</th>
						<th>SEO - Mô tả</th>
						<th>SEO - Keyword</th>
						<th colspan="2" class="alignCenter">Xử lý</th>
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
						</td>
						<td align="center">
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
						</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>