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
									echo $this->Html->link (' Products', array (
										'controller' => 'products',
										'action' => 'index'
									));
									echo ' / ' . $product['Product']['product_name'];
								?>
							</div>
							<div class="col-md-6 alignRight">
								<i class="fa fa-edit"></i> 
								<?php echo $this->Html->link ( 
									$product['Product']['product_name'],
									array (
										'controller' => 'products',
										'action' => 'edit',
										$product['Product']['id']
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
					<table class="table table-bordered table-striped">
						<col width="20%"></col>
						<col width="80%"></col>
						<tbody>
							<tr>
								<td align="right">Tên sản phẩm:</td>
								<td><?php echo ($product['Product']['product_name']);  ?></td>
							</tr>
							<tr>
								<td align="right">Mã sản phẩm:</td>
								<td><?php echo ($product['Product']['product_code']);  ?></td>
							</tr>
							<tr>
								<td align="right">Giá sản phẩm:</td>
								<td><?php echo ($product['Product']['product_price']);  ?></td>
							</tr>
							<tr>
								<td align="right">Giá đã giảm:</td>
								<td><?php echo ($product['Product']['product_price_sale']);  ?></td>
							</tr>
							<tr>
								<td align="right">Thời hạn bảo hành:</td>
								<td><?php echo ($product['Product']['warranty_time']);  ?></td>
							</tr>
							<tr>
								<td align="right">Tình trạng sản phẩm:</td>
								<td><?php echo ($product['Product']['product_status']);  ?></td>
							</tr>
							<tr>
								<td align="right">Loại sản phẩm:</td>
								<td><?php echo $product ['Product'] ['product_type'];  ?></td>
							</tr>
							<tr>
								<td align="right">Danh mục sản phẩm:</td>
								<td><?php echo implode("<br />", explode(",", $product ['Product'] ['category_slug']));  ?></td>
							</tr>
							<tr>
								<td align="right">Từ khóa sản phẩm:</td>
								<td><?php echo ($product['Product']['seo_keyword']);  ?></td>
							</tr>
							<tr>
								<td align="right">Mô tả:</td>
								<td class="pdl20"><?php echo ($product['Product']['description']);  ?></td>
							</tr>
							<tr>
								<td align="right">Tổng quan:</td>
								<td class="pdl20"><?php echo ($product['Product']['overview']);  ?></td>
							</tr>
							<tr>
								<td align="right">Thông số kỹ thuật:</td>
								<td class="pdl20"><?php echo ($product['Product']['specification']);  ?></td>
							</tr>
							<tr>
								<td align="right">Review:</td>
								<td class="pdl20"><?php echo ($product['Product']['review']);  ?></td>
							</tr>
							<tr>
								<td align="right">Nhận xét khách hàng:</td>
								<td class="pdl20"><?php echo ($product['Product']['customer_review']);  ?></td>
							</tr>
							<tr>
								<td align="right">Ghi chú:</td>
								<td class="pdl20"><?php echo ($product['Product']['note']);  ?></td>
							</tr>
							<tr>
								<td align="right">SEO - Mô tả:</td>
								<td class="pdl20"><?php echo ($product['Product']['seo_description']);  ?></td>
							</tr>
							<tr>
								<td align="right">SEO - Keyword:</td>
								<td class="pdl20"><?php echo ($product['Product']['seo_keyword']);  ?></td>
							</tr>
							<tr>
								<td align="right">Từ khóa sản phẩm:</td>
								<td class="pdl20"><?php echo ($product['Product']['product_tag']);  ?></td>
							</tr>
							<tr>
								<td align="right">Ngày tạo:</td>
								<td><?php echo ($product['Product']['created']);  ?></td>
							</tr>
							<tr>
								<td align="right">Ảnh sản phẩm:</td>
								<td>
								<?php
									foreach ($productImg as $value):
										echo '<img class="product-img" src="' . $base_url . 'img/products/images/' . $value['ProductImage']['image_url'] . '" width="80%" alt="profile picture">';
									endforeach;
								?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>