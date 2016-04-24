<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('categories/category');?>
<div class="breadcrumbs container">
	<ol class="pull-right breadcrumb">
		<li>
			<?php
				echo $this->Html->link ( ' Danh mục', array (
					'controller' => 'categories',
					'action' => 'index'
				) );
			?>
		</li>
		<li class="active">Thêm danh mục</li>
	</ol>
</div>
<div class="flash alignCenter">
	<?php echo $this->Session->flash(); ?>
</div>
<div class="container content mgbt20">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" data-toggle="tab">Thêm danh mục</a></li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row about-me">
		<div class="col-sm-1 col-md-1">&nbsp;</div>
		<div class="col-sm-10 col-md-10">
			<?php echo $this->Form->create('Category', array('class' => 'form-horizontal')); ?>
        <div class="row">
          <div class="form-group">
            <label for="inputCategoryName" class="col-sm-3 control-label">Tên Danh mục: </label>
            <div class="col-sm-9">
              <input name="data[Category][category_name]" placeholder="Tên danh mục " class="form-control" type="text" id="categoryName" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDescription" class="col-sm-3 control-label">Mô tả: </label>
            <div class="col-sm-9">
              <?php echo $this->Form->textarea('description',array('class'=>'ckeditor'));?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSeoDescription" class="col-sm-3 control-label">SEO - Mô tả: </label>
            <div class="col-sm-9">
              <?php echo $this->Form->textarea('seo_description',array('class'=>'ckeditor'));?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSeoKeyword" class="col-sm-3 control-label">SEO - Keyword: </label>
            <div class="col-sm-9">
              <input name="data[Category][seo_keyword]" placeholder="Nhập các từ khóa phân cách bằng các dầu ','" class="form-control" type="text" id="categorySeoKeyword">
            </div>
          </div>
          <div class="form-group">
            <label for="inputSeoDescription" class="col-sm-3 control-label">Loại sản phẩm: </label>
            <div class="col-sm-9">
              <select name="data[Category][product_type]" class="form-control" style="padding: 7px;" id="productType" required="required" onchange="selectProductType();">
              	<option value="">---</option>
              	<?php
              		foreach ($product_types as $product_type):
              			echo '<option value="' .$product_type['SelectOption']['select_code']. '">' .$product_type['SelectOption']['display_name']. '</option>';
              		endforeach;
              	?>
  	     			</select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSeoKeyword" class="col-sm-3 control-label">Là danh mục cha:</label>
            <div class="col-sm-9">
            	<div class="checkbox">
							  <label>
							    <input type="checkbox" name="data[Category][is_parent]" id="parentCategory" value="1" aria-label="Danh mục cha" onchange="checkParentCategory();">
							    Danh mục cha ví dụ như "Nhà sản xuất", "Theo kiểu", "Tính năng", ...
							  </label>
							</div>
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
			     	 	<div class="col-sm-9 alignCenter mgt20 mgbt20">
			          <button type="submit" class="btn btn-primary">Thêm mới</button>
				      </div>
            </div>
          </div>
        </form>
			</div>
		<div class="col-sm-1 col-md-1">&nbsp;</div>
	</div>
</div>



