<?php echo $this->Html->script('ckeditor/ckeditor');?>
<div class="container-fluid mgt80">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php echo $this->Html->link ( 'Templates', array (
            'controller' => 'templates',
            'action' => 'index'
          ) ); ?> / 
          <?php echo $this->Html->link ( $template['Template']['template_name'], array (
            'controller' => 'templates',
            'action' => 'view',
            $template['Template']['id']
          ) ); ?> / 
          <span>Update template</span>
        </div>
        <div class="panel-body">
          <div class="row pdr20">
            <?php echo $this->Form->create('Template', array('type' => 'PUT', 'class' => 'form-horizontal')); ?>
              <div class="form-group">
                <label for="inputCategoryName" class="col-sm-2 control-label">Tên mẫu: </label>
                <div class="col-sm-10">
                  <input name="data[Template][template_name]" placeholder="Tên danh mục " class="form-control" type="text" id="categoryName" required="required" value="<?php echo $template['Template']['template_name'] ; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputDescription" class="col-sm-2 control-label">Nội dung mẫu: </label>
                <div class="col-sm-10">
                  <?php 
                    echo $this->Form->textarea (
                      'template_body',
                      array (
                        'class' => 'ckeditor',
                        'value' => $template['Template']['template_body']
                      )
                    );
                  ?>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-10 mgt20 mgbt20">
                  <?php 
                    echo $this->Html->link (
                      'Hủy bỏ',
                      array (
                        'controller' => 'templates',
                        'action' => 'view',
                        $template['Template']['id']
                      ),
                      array (
                        'class' => 'btn btn-primary mgr10'
                      )
                    );
                  ?>
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page content-->