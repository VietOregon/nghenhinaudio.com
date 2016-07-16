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

// app/Model/Product.php
App::uses('AppModel', 'Model');

class Product extends AppModel {
  var $name = 'Product';

  public function getProducts()
  {
    $options['conditions']['Product.del_flag ='] = 'N';
    $options['order'] = array(
        'Product.created'
    );
    return $this->find('all', $options);
  }

  public function getProductById($product_id)
  {
    $options['fields'] = array(
        'Product.*',
        'SelectOption.display_name',
        'SelectOption.select_name'
    );
    $options['joins'] = array(
        array(
            'table' => 'select_options',
            'alias' => 'SelectOption',
            'type' => 'inner',
            'conditions' => array(
                'SelectOption.column_name = "product_type"' ,
                'SelectOption.select_name = Product.product_type' ,
            )
        )
    );
    $options['conditions']['Product.id ='] = $product_id;
    $options['conditions']['Product.del_flag ='] = 'N';
    return $this->find('first', $options);
  }
  public function getProductBySlug($product_slug)
  {
    $options['fields'] = array(
        'Product.*',
        'SelectOption.display_name',
        'SelectOption.select_name'
    );
    $options['joins'] = array(
        array(
            'table' => 'select_options',
            'alias' => 'SelectOption',
            'type' => 'inner',
            'conditions' => array(
                'SelectOption.column_name = "product_type"' ,
                'SelectOption.select_name = Product.product_type' ,
            )
        )
    );
    $options['conditions']['Product.product_slug ='] = $product_slug;
    $options['conditions']['Product.del_flag ='] = 'N';
    return $this->find('first', $options);
  }
  public function getProductByProductType($product_type)
  {
    $options['fields'] = array(
        'Product.*',
        'ProductImage.image_url',
    );
    $options['joins'] = array(
        array(
            'table' => 'product_images',
            'alias' => 'ProductImage',
            'type' => 'inner',
            'conditions' => array(
                'ProductImage.product_id = Product.id',
            )
        )
    );
      
    $options['conditions']['Product.product_type ='] = $product_type;
    $options['conditions']['Product.del_flag ='] = 'N';
    $options['group'] = 'ProductImage.product_id';
    return $this->find('all', $options);
  }
  function getListMax() {
    $options['fields'] = array(
        'max(cast(id as signed)) as id'
    );
    return $this->find('all', $options);
  }
  function getRelatedProduct($product_type) {
    $options['fields'] = array(
        'Product.id',
        'Product.product_name',
        'Product.product_slug',
        'Product.product_price',
        'Product.product_price_sale',
        'ProductImage.image_url',
    );
    $options['joins'] = array(
        array(
            'table' => 'product_images',
            'alias' => 'ProductImage',
            'type' => 'inner',
            'conditions' => array(
                'ProductImage.product_id = Product.id',
            )
        )
    );
    $options['conditions']['product_type'] = $product_type;
    $options['conditions']['Product.del_flag ='] = 'N';
    $options['order'] = 'rand()';
    $options['limit'] = '8';
    $options['group'] = 'ProductImage.product_id';
    return $this->find('all', $options);
  }

  function getNewProduct() {
    $options['fields'] = array(
        'Product.id',
        'Product.product_name',
        'Product.product_slug',
        'Product.product_price',
        'Product.product_price_sale',
        'ProductImage.image_url',
    );
    $options['joins'] = array(
        array(
            'table' => 'product_images',
            'alias' => 'ProductImage',
            'type' => 'inner',
            'conditions' => array(
                'ProductImage.product_id = Product.id',
            )
        )
    );
    $options['conditions']['Product.del_flag ='] = 'N';
    $options['order'] = 'Product.created';
    $options['limit'] = '8';
    $options['group'] = 'ProductImage.product_id';
    return $this->find('all', $options);
  }

  public function getProductByCategorySlug($categorySlug, $limit = null, $orderBy = 'id', $descending = 'DESC') {
    $options['fields'] = array(
        'Product.*',
        'ProductImage.image_url',
    );
    $options['joins'] = array(
        array(
            'table' => 'product_images',
            'alias' => 'ProductImage',
            'type' => 'left',
            'conditions' => array(
                'ProductImage.product_id = Product.id',
            )
        )
    );
    $options['conditions']['Product.category_slug like'] = "%" . $categorySlug . "%";
    $options['order'] = 'Product.' . $orderBy . ' ' . $descending;
    $options['group'] = 'Product.id';
    if (!is_null($limit)) {
      $options['limit'] = $limit;
    }
    return $this->find('all', $options);
  }
}