<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('products/product');?>
<?php echo $this->Html->css('views/product');?>
<div class="breadcrumbs container">
	<ol class="pull-right breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( ' Sản phẩm', array (
					'controller' => 'products',
					'action' => 'index'
				) );
			?>
		</li>
		<li>
			<?php
				echo $this->Html->link ( $product['Product']['product_name'], array (
					'controller' => 'products',
					'action' => 'view',
					$product['Product']['id']
				) );
			?>
		</li>
		<li class="active">Chỉnh sửa sản phẩm</li>
	</ol>
</div>
<div class="flash alignCenter">
  <?php echo $this->Session->flash(); ?>
</div>
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" data-toggle="tab">Chỉnh sửa sản phẩm</a></li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row about-me">
		<div class="col-sm-1 col-md-1">&nbsp;</div>
		<div class="col-sm-10 col-md-10">
      <?php echo $this->Form->create('Product', array('type' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
        <div class="row">
          <div class="form-group">
            <div class="col-sm-12">
              <input name="data[Product][id]" class="form-control" type="hidden" id="categoryId" value="<?php echo $product['Product']['id']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputProductName" class="col-sm-3 control-label">Tên sản phẩm: </label>
            <div class="col-sm-9">
              <input name="data[Product][product_name]" placeholder="Tên sản phẩm " class="form-control" type="text" id="productName" required="required" value="<?php echo $product['Product']['product_name']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputProductCode" class="col-sm-3 control-label">Mã sản phẩm: </label>
            <div class="col-sm-9">
              <input name="data[Product][product_code]" placeholder="Mã sản phẩm " class="form-control" type="text" id="productCode" required="required" value="<?php echo $product['Product']['product_code']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputProductPrice" class="col-sm-3 control-label">Giá sản phẩm: </label>
            <div class="col-sm-9">
              <input name="data[Product][product_price]" placeholder="Giá sản phẩm " class="form-control" type="text" id="productPrice" value="<?php echo $product['Product']['product_price']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputWarrantyTime" class="col-sm-3 control-label">Thời hạn bảo hành: </label>
            <div class="col-sm-9">
              <input type="date" name="data[Product][warranty_time]" class="form-control" placeholder="tháng/ngày/năm" value="<?php echo $product['Product']['warranty_time']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputProductStatus" class="col-sm-3 control-label">Tình trạng sản phẩm: </label>
            <div class="col-sm-9">
              <input name="data[Product][product_status]" placeholder="Tình trạng sản phẩm " class="form-control" type="text" id="productStatus" value="<?php echo $product['Product']['product_status']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDescription" class="col-sm-3 control-label">Mô tả: </label>
            <div class="col-sm-9">
              <?php
                echo $this->Form->textarea (
                  'description',
                  array (
                    'value' => $product['Product']['description'],
                    'class' => 'ckeditor'
                  )
                );
              ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputNote" class="col-sm-3 control-label">Ghi chú: </label>
            <div class="col-sm-9">
              <?php
                echo $this->Form->textarea (
                  'note',
                  array (
                      'value' => $product['Product']['note'],
                      'class' => 'ckeditor'
                    )
                  );
                ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSeoDescription" class="col-sm-3 control-label">SEO - Mô tả: </label>
            <div class="col-sm-9">
              <?php
                echo $this->Form->textarea (
                  'seo_description',
                  array (
                    'value' => $product['Product']['seo_description'],
                    'class' => 'ckeditor'
                  )
                );
              ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSeoKeyword" class="col-sm-3 control-label">SEO - Keyword: </label>
            <div class="col-sm-9">
              <input name="data[Product][seo_keyword]" placeholder="Nhập các từ khóa phân cách bằng các dầu ','" class="form-control" type="text" id="categorySeoKeyword" value="<?php echo $product['Product']['seo_keyword']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputSeoDescription" class="col-sm-3 control-label">Loại sản phẩm: </label>
            <div class="col-sm-9">
              <select name="data[Product][product_type]" class="form-control" style="padding: 7px;" id="productType" required="required" onchange="selectProductType('edit');">
                <option value="">---</option>
                <?php
                  foreach ($product_types as $product_type):
                    if ($product_type['SelectOption']['select_code'] == $product['Product']['product_type']) {
                      echo '<option value="' . $product_type['SelectOption']['select_code'] . '" selected >' . $product_type['SelectOption']['display_name'] . '</option>';
                    } else {
                      echo '<option value="' .$product_type['SelectOption']['select_code']. '">' .$product_type['SelectOption']['display_name']. '</option>';
                    }
                  endforeach;
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputCategoryId" class="col-sm-3 control-label">Danh mục sản phẩm: </label>
            <div class="col-sm-9">
              <div class="checkbox" id="categoryCheckbox">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputCategoryId" class="col-sm-3 control-label">Ảnh sản phẩm: </label>
            <div class="col-sm-9">
              <input type="file" name="data[ProductImage][image][]" multiple="multiple" id="ProductFiles" class="form-control" accept="image/*" >
              <label for="inputCategoryId" class="control-label text-danger">(* Chỉ nên chọn đa 5 ảnh)</label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3">&nbsp;</div>
            <div class="col-sm-9 mgt20 mgbt20">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
          </div>
        </div>
    	</form>
      <input type="hidden" value="<?php if(isset($product['Product']['category_name']))echo $product['Product']['category_name']; ?>" id="parentCategoryHidden" />
      <input type="hidden" value="edit" id="productAction" />
		</div>
		<div class="col-sm-1 col-md-1">&nbsp;</div>
	</div>
</div>