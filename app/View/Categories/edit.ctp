<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('categories/category');?>
<div class="container-fluid mgt80">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php echo $this->Html->link ( 'Categories', array (
            'controller' => 'categories',
            'action' => 'index'
          ) ); ?> / 
          <?php echo $this->Html->link ( $category['Category']['category_name'], array (
            'controller' => 'categories',
            'action' => 'view',
            $category['Category']['id']
          ) ); ?> / 
          <span>Update category</span>
        </div>
        <div class="panel-body pdr30">
          <div class="flash alignCenter">
            <?php echo $this->Session->flash(); ?>
          </div>
    			<?php echo $this->Form->create('Category', array('type' => 'PUT', 'class' => 'form-horizontal')); ?>
    				<div class="row">
    					<div class="form-group">
                <div class="col-sm-12">
                  <input name="data[Category][id]" class="form-control" type="hidden" id="categoryId" value="<?php echo $category['Category']['id']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputCategoryName" class="col-sm-3 control-label">Tên Danh mục: </label>
                <div class="col-sm-9">
                  <input name="data[Category][category_name]" placeholder="Tên danh mục " class="form-control" type="text" id="categoryName" value="<?php echo $category['Category']['category_name']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDescription" class="col-sm-3 control-label">Mô tả: </label>
                <div class="col-sm-9">
                  <?php
                  	echo $this->Form->textarea (
    									'description',
    									array (
    										'value' => $category['Category']['description'],
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
    										'value' => $category['Category']['seo_description'],
    										'class' => 'ckeditor'
    									)
    								);
    							?>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSeoKeyword" class="col-sm-3 control-label">SEO - Keyword: </label>
                <div class="col-sm-9">
                  <input name="data[Category][seo_keyword]" placeholder="Nhập các từ khóa phân cách bằng các dầu ','" class="form-control" type="text" id="categorySeoKeyword" value="<?php echo $category['Category']['seo_keyword']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputSeoDescription" class="col-sm-3 control-label">Loại sản phẩm: </label>
                <div class="col-sm-9">
                  <select name="data[Category][product_type]" class="form-control" style="padding: 7px;" id="productType" required="required" onchange="selectProductType();">
                  	<option value="">---</option>
                  	<?php
                  		foreach ($product_types as $product_type):
                  			if ($product_type['SelectOption']['select_name'] == $category['Category']['product_type']) {
                  				echo '<option value="' . $product_type['SelectOption']['select_name'] . '" selected >' . $product_type['SelectOption']['display_name'] . '</option>';
                  			} else {
                  				echo '<option value="' . $product_type['SelectOption']['select_name'] . '">' . $product_type['SelectOption']['display_name'] . '</option>';
                  			}
                  		endforeach;
                  	?>
      	     			</select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSeoKeyword" class="col-sm-3 control-label">Là danh mục cha:</label>
                <div class="col-sm-9">
  							  <label>
  							    <input type="checkbox" name="data[Category][is_parent]" id="parentCategory" value="1" aria-label="Danh mục cha" onchange="checkParentCategory();" <?php if($category['Category']['is_parent'] == 1) echo 'checked'; ?>>
  							    Danh mục cha ví dụ như "Nhà sản xuất", "Theo kiểu", "Tính năng", ...
  							  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSeoKeyword" class="col-sm-3 control-label">Thuộc danh mục cha:</label>
                <div class="col-sm-9">
                	<select name="data[Category][parent_category]" class="form-control" style="padding: 7px;" id="selectParentCategory">
                		<option value="">---</option>
      	     			</select>
                </div>
              </div>
              <div class="form-group">
        				<div class="col-sm-3">&nbsp;</div>
    			     	 	<div class="col-sm-9 mgt20 mgbt20">
    			          <button type="submit" class="btn btn-primary">Cập nhật</button>
    				      </div>
                </div>
              </div>
            </div>
        	</form>
          <input type="hidden" value="<?php echo $category['Category']['parent_category']; ?>" id="parentCategoryHidden" />
  			</div>
      </div>
    </div>
	</div>
</div>