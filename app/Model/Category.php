<?php
/**
  * This file is …….
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để ……. 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/

// app/Model/Category.php
App::uses('AppModel', 'Model');

class Category extends AppModel {
    var $name = 'Category';
   
    public function getCategories()
    {
      $options['conditions']['Category.del_flag ='] = 'N';
      $options['order'] = array(
          'Category.id DESC'
      );
      return $this->find('all', $options);
    }

    public function getCategoryById($category_id)
    {
      $options['conditions']['Category.id ='] = $category_id;
      $options['conditions']['Category.del_flag ='] = 'N';
      return $this->find('first', $options);
    }

    public function getParentCategoryByProductType($product_type, $is_parent)
    {
      $options['fields'] = array(
        'Category.id',
        'Category.category_name',
        'Category.product_type',
        'Category.is_parent',
        'Category.parent_category'
      );
      $options['conditions']['Category.product_type ='] = $product_type;
      if ($is_parent != null) {
        $options['conditions']['Category.is_parent'] = $is_parent;
      }
      $options['conditions']['Category.del_flag'] = 'N';
      return $this->find('all', $options);
    }
}