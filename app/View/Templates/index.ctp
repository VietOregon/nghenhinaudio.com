<div class="container-fluid mgt80">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6">Template management table</div>
              <div class="col-md-6 alignRight">
                <?php echo $this->Html->link (
                  '<i class="fa fa-user-plus"></i> Create template',
                  array (
                    'controller' => 'templates',
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
          <table id="zctb" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
            <col width="10%"></col>
            <col width="50%"></col>
            <col width="20%"></col>
            <col width="20%"></col>
            <thead>
              <tr>
                <th>id</th>
                <th>Template Name</th>
                <th>Created at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($templates as $template): ?>
                <tr>
                  <td><?php echo $template['Template']['id']; ?></td>
                  <td>
                    <?php echo $this->Html->link ( $template['Template']['template_name'], array (
                      'controller' => 'templates',
                      'action' => 'view',
                      $template['Template']['id']
                    ) ); ?>
                  </td>
                  <td>
                    <?php echo $template ['Template'] ['created']; ?>
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-6">
                          <a class="btn btn-danger btn-xs">
                            <?php echo $this->Html->link (
                              ' Edit',
                              array (
                                'action' => 'edit',
                                $template['Template']['id']
                              )
                            ); ?>
                          </a>
                        </div>
                        <div class="col-md-6">
                          <a class="">
                            <?php echo $this->Form->postLink (
                              'Delete',
                              array (
                                'action' => 'delete',
                                $template['Template']['id']
                              ), array (
                                'confirm' => 'Are you sure delete user?'
                              )
                            ); ?>
                          </a>
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
</div>
