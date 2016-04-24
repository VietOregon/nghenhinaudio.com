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

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');

class ProductsController extends AppController {

    public $uses = array('Product', 'Category', 'SelectOption', 'ProductImage');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';  

        $this->Auth->allow('');
    }

    public function index() {
        // $this->isAdmin();
        $products = $this->Product->getProducts();
        $this->set('products', $products);
    }
    public function add() {
        if ($this->request->is('post')) {
            $dsProduct = $this->Product->getDataSource();
            $dsProductImage = $this->ProductImage->getDataSource();
            
            $dsProduct->begin($this);
            $dsProductImage->begin($this);

            $this->Product->create();
            $this->ProductImage->create();

            $product_id_max = $this->Product->getListMax();
            $product_id = $product_id_max[0][0]["id"]+1;
            
            $saveFlag = $this->saveProduct($this->request->data, $product_id, 'add');

            if ($saveFlag) {
                $dsProduct->commit($this);
                $dsProductImage->commit($this);
                $this->Session->setFlash(
                    'Thêm sản phẩm thành công.',
                    'default',
                    array('class' => 'succes')
                );
                return $this->redirect(array('controller' => 'products', 'action' =>'view', $product_id));
            }
            $dsProduct->rollback($this);
            $dsProductImage->rollback($this);
            $this->Session->setFlash(
                'Thêm sản phẩm thất bại, vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        }
        $product_types = $this->SelectOption->getOptionByColumnName('product_type');
        $this->set('product_types', $product_types);
        $categories = $this->Category->getCategories();
        $this->set('categories', $categories);
    }
    public function view($id = null) {
        $product = $this->Product->getProductById($id);
        if (count($product) > 0) {
            $this->set('product', $product);
            $this->set('productImg', $this->ProductImage->getProductImgByProductId($id));
        } else {
            $this->Session->setFlash(
                'Sản phẩm không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('controller' => 'products', 'action' =>'index'));
        }
    }
    public function edit($id = null) {
        $product = $this->Product->getProductById($id);
        if (count($product) == 0) {
            $this->Session->setFlash(
                'Sản phẩm không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('controller' => 'products', 'action' =>'index'));
        }
        $this->Product->set($this->request->data);
        if ($this->Product->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {
                $dsProduct = $this->Product->getDataSource();
                $dsProductImage = $this->ProductImage->getDataSource();
                
                $dsProduct->begin($this);
                $dsProductImage->begin($this);

                $saveFlag = $this->saveProduct($this->request->data, $id, 'edit');

                if ($saveFlag) {
                    $dsProduct->commit($this);
                    $dsProductImage->commit($this);
                    $this->Session->setFlash(
                        'Cập nhật sản phẩm thành công.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('controller' => 'products', 'action' =>'view', $id));
                }
                $dsProduct->rollback($this);
                $dsProductImage->rollback($this);
                $this->Session->setFlash(
                    'Cập nhật sản phẩm thất bại, vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        }
        $product_types = $this->SelectOption->getOptionByColumnName('product_type');
        $this->set('product_types', $product_types);
        $this->set('product', $product);
    }
    public function delete($id = null) {
        $this->request->allowMethod('post');
        $product = $this->Product->getProductById($id);
        if (count($product) == 0) {
            $this->Session->setFlash(
                'Sản phẩm không tồn tại.',
                'default',
                array('class' => 'error')
            );
        } else {
            $product['Product']['del_flag'] = 'Y';
            $product['Product']['modified'] = date("Y-m-d H:i:s",time());
            if ($this->Product->save($product)) {
                $this->Session->setFlash(
                    'Xóa sản phẩm thành công.',
                    'default',
                    array('class' => 'succes')
                );
            } else {
                $this->Session->setFlash(
                    'Xóa sản phẩm thất bại, vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        }
        return $this->redirect(array('controller' => 'products', 'action' =>'index'));
    }
    
    public function getCategoryByProductType($product_type = null)
    {
        $categories = $this->Category->getParentCategoryByProductType($product_type, null);
        $myjson = $this->my_json_encode($categories);
        echo $myjson;
        exit;
    }

    public function saveProduct($data, $product_id, $function)
    {
        $requestData['Product'] = $data['Product'];
        $requestData['Product']['category_name'] = implode(",", $requestData['Product']['category_name']);
        $saveFlag = $this->Product->save($requestData['Product']);

        if ($saveFlag) {
            $requestData['ProductImage'] = $data['ProductImage'];
            $productImageData = array();
            $folderName = date("mY",time());
            if (!file_exists(PRODUCT_IMG_FOLDER.DS.$folderName)) {
                $dir = new Folder(PRODUCT_IMG_FOLDER.DS.$folderName, true, 0777);
            }
            $tmpImage = array();
            if ($requestData['ProductImage']['image'][0]['tmp_name'] != '') {
                if ($function == 'edit') {
                    $oldProductImg = $this->ProductImage->getProductImgByProductId($product_id);
                    foreach ($oldProductImg as $key => $value) {
                        $this->ProductImage->id = $value['ProductImage']['id'];
                        if ($this->ProductImage->delete() 
                            && file_exists(PRODUCT_IMG_FOLDER.DS.$value['ProductImage']['image_url'])) {
                            $this->removeImg(PRODUCT_IMG_FOLDER.DS.$value['ProductImage']['image_url']);
                        }
                    }
                }
                foreach ($requestData['ProductImage']['image'] as $key => $value) {
                    $productImageData[$key]['ProductImage']['product_id'] = $product_id;
                    $productImageData[$key]['ProductImage']['image_url'] = $folderName . DS . $value['name'];
                    $tmpImage[$key]['name'] = $value['name'];
                    $tmpImage[$key]['tmp_name'] = $value['tmp_name'];
                }
                $saveFlag = $this->ProductImage->saveMany($productImageData);   

                if ($saveFlag) {
                    foreach ($tmpImage as $key => $value) {
                        if ($key < 5) {
                            move_uploaded_file(
                                $value['tmp_name'], 
                                PRODUCT_IMG_FOLDER.DS.$folderName . DS . $value['name']
                            );
                        }
                    }
                }
            }
        }
        return $saveFlag;
    }

    function my_json_encode($phparr)
    {
        return json_encode($phparr);
    }

    function removeImg($file_path = null) {
        unlink($file_path);
    }
}