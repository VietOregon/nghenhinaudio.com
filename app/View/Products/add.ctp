<?php echo $this->Html->script('ckeditor/ckeditor');?>
<!-- Page head -->
<div class="container-fluid mgt80 pdr10">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php echo $this->Html->link ( 'Products', array (
            'controller' => 'templates',
            'action' => 'index'
          ) ); ?> / Create product
        </div>
        <div class="panel-body pdr30">
          <div class="alignCenter">
          	<?php if(isset($errors)) {
          		echo '<ul>';
          		foreach ($errors as $error):
          				echo '<li class="error">'.$error[0].'</li>';
          		endforeach;
          		echo '</ul>';
          	}?>
          </div>
          <div class="flash alignCenter">
          	<?php echo $this->Session->flash(); ?>
          </div>
    			<?php echo $this->Form->create('Product', array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
            <div class="row">
              <div class="form-group">
                <label for="inputProductName" class="col-sm-3 control-label">Tên sản phẩm: </label>
                <div class="col-sm-9">
                  <input name="data[Product][product_name]" placeholder="Tên sản phẩm " class="form-control" type="text" id="productName" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="inputProductCode" class="col-sm-3 control-label">Mã sản phẩm: </label>
                <div class="col-sm-9">
                  <input name="data[Product][product_code]" placeholder="Mã sản phẩm " class="form-control" type="text" id="productCode" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="inputProductPrice" class="col-sm-3 control-label">Giá sản phẩm: </label>
                <div class="col-sm-9">
                  <input name="data[Product][product_price]" placeholder="Giá sản phẩm " class="form-control" type="text" id="productPrice">
                </div>
              </div>
              <div class="form-group">
                <label for="inputProductPriceSale" class="col-sm-3 control-label">Giá đã giảm: </label>
                <div class="col-sm-9">
                  <input name="data[Product][product_price_sale]" placeholder="Giá đã giảm " class="form-control" type="text" id="productPriceSale">
                </div>
              </div>
              <div class="form-group">
                <label for="inputProductNumber" class="col-sm-3 control-label">Số lượng sản phẩm: </label>
                <div class="col-sm-9">
                  <input name="data[Product][product_number]" placeholder="Số lượng sản phẩm " class="form-control" type="text" id="productProductNumber">
                </div>
              </div>
              <div class="form-group">
                <label for="inputWarrantyTime" class="col-sm-3 control-label">Thời hạn bảo hành: </label>
                <div class="col-sm-9">
                  <input type="date" name="data[Product][warranty_time]" class="form-control" placeholder="tháng/ngày/năm">
                </div>
              </div>
              <div class="form-group">
                <label for="inputProductStatus" class="col-sm-3 control-label">Tình trạng sản phẩm: </label>
                <div class="col-sm-9">
                  <input name="data[Product][product_status]" placeholder="Tình trạng sản phẩm " class="form-control" type="text" id="productStatus">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDescription" class="col-sm-3 control-label">Mô tả: </label>
                <div class="col-sm-9">
                  <?php echo $this->Form->textarea('description',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="form-group">
                <label for="inputOverview" class="col-sm-3 control-label">
                  <p>Tổng quan: </p>
                  <p><button type="button" class="btn btn-primary" onclick="insertTemplate('overview');">Mẫu tổng quan >></button></p>
                </label>
                <div class="col-sm-9">
                  <?php echo $this->Form->textarea('overview',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSpecification" class="col-sm-3 control-label">
                  <p>Thông số kỹ thuật: </p>
                  <p><button type="button" class="btn btn-primary" onclick="insertTemplate('specification');">Mẫu TSKT >></button></p>
                </label>
                <div class="col-sm-9">
                  <?php echo $this->Form->textarea('specification',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="form-group">
                <label for="inputReview" class="col-sm-3 control-label">
                  <p>Nhận xét: </p>
                  <p><button type="button" class="btn btn-primary" onclick="insertTemplate('review');">Mẫu nhận xét >></button></p>
                </label>
                <div class="col-sm-9">
                  <?php echo $this->Form->textarea('review',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="form-group">
                <label for="inputCustomerReview" class="col-sm-3 control-label">
                  <p>Phản hồi khách hàng</p>
                  <p><button type="button" class="btn btn-primary" onclick="insertTemplate('customer_review');">Mẫu phản hồi >></button></p>
                </label>
                <div class="col-sm-9">
                  <?php echo $this->Form->textarea('customer_review',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="form-group">
                <label for="inputNote" class="col-sm-3 control-label">
                  <p>Ghi chú: </p>
                  <p><button type="button" class="btn btn-primary" onclick="insertTemplate('note');">Mẫu ghi chú >></button></p>
                </label>
                <div class="col-sm-9">
                  <?php echo $this->Form->textarea('note',array('class'=>'ckeditor'));?>
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
                  <input name="data[Product][seo_keyword]" placeholder="Nhập các từ khóa phân cách bằng các dầu ','" class="form-control" type="text" id="categorySeoKeyword">
                </div>
              </div>
              <div class="form-group">
                <label for="inputProductTag" class="col-sm-3 control-label">Từ khóa sản phẩm: </label>
                <div class="col-sm-9">
                  <input name="data[Product][product_tag]" placeholder="Nhập các từ khóa sản phẩm phân cách bằng các dầu ','" class="form-control" type="text" id="productTag">
                </div>
              </div>
              <div class="form-group">
                <label for="inputSeoDescription" class="col-sm-3 control-label">Loại sản phẩm: </label>
                <div class="col-sm-9">
                  <select name="data[Product][product_type]" class="form-control" style="padding: 7px;" id="productType" required="required" onchange="selectProductType();">
                    <option value="">---</option>
                    <?php
                      foreach ($product_types as $product_type):
                        echo '<option value="' .$product_type['SelectOption']['select_name']. '">' .$product_type['SelectOption']['display_name']. '</option>';
                      endforeach;
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputCategoryId" class="col-sm-3 control-label">Danh mục sản phẩm: </label>
                <div class="col-sm-9">
                  <div id="categoryCheckbox">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputImg"  class="col-sm-3 control-label">Ảnh liên quan <span class="text-danger">(* Chỉ nên chọn tối đa 5 ảnh)</span>: </label>
                <div class="col-sm-9">
                  <input type="file" name="data[ProductImage][image][]" class="multi with-preview mgt10" multiple accept="image/*" />
                </div>
              </div>
            </div>
              <div class="form-group">
                <div class="col-sm-3">&nbsp;</div>
                <div class="col-sm-9 mgt20 mgbt20">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
              </div>
            </div>
          </form>
          <input type="hidden" value="add" id="productAction" />
    	  </div>
    	</div>
    </div>
  </div>
</div>
<?php echo $this->Html->script('products/jquery.multifile');?>
<?php echo $this->Html->script('products/product');?>
<?php echo $this->Html->css('views/product/product');?>
