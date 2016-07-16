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

class CategoriesController extends AppController {

    public $uses = array('Category', 'SelectOption');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';  
        $this->Auth->allow('');
    }

    public function index() {
        // $this->isAdmin();
        $categories = $this->Category->getCategories();
        $this->set('categories', $categories);
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->Category->create();
            $request = $this->request->data;
            $request["Category"]["category_slug"] = $this->sluggable($request["Category"]["category_name"]);
            if ($this->Category->save($request)) {
                $this->Session->setFlash(
                    'Thêm danh mục thành công.',
                    'default',
                    array('class' => 'succes')
                );
                return $this->redirect(array('action' =>'index'));
            }
            $this->Session->setFlash(
                'Thêm danh mục thất bại, vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        }
        $product_types = $this->SelectOption->getOptionByColumnName('product_type');
        $this->set('product_types', $product_types);
    }
    public function view($id = null) {
        $category = $this->Category->getCategoryById($id);
        if (count($category) > 0) {
            $this->set('category', $category);
        } else {
            $this->Session->setFlash(
                'Danh mục không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('controller' => 'categories', 'action' =>'index'));
        }
    }
    public function edit($id = null) {
        $category = $this->Category->getCategoryById($id);
        if (count($category) == 0) {
            $this->Session->setFlash(
                'Danh mục không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('controller' => 'categories', 'action' =>'index'));
        }
        $this->Category->set($this->request->data);
        if ($this->Category->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {
                if ($this->Category->save($this->request->data)) {
                    $this->Session->setFlash(
                        'Cập nhật danh mục thành công.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(
                    'Cập nhật danh mục thất bại, vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        }
        $this->set('category', $category);
        $product_types = $this->SelectOption->getOptionByColumnName('product_type');
        $this->set('product_types', $product_types);
    }
    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');
        $category = $this->Category->getCategoryById($id);
        if (count($category) == 0) {
            $this->Session->setFlash(
                'Danh mục không tồn tại.',
                'default',
                array('class' => 'error')
            );
        } else {
            $category['Category']['del_flag'] = 'Y';
            $category['Category']['modified'] = date("Y-m-d H:i:s",time());
            if ($this->Category->save($category)) {
                $this->Session->setFlash(
                    'Xóa danh mục thành công.',
                    'default',
                    array('class' => 'succes')
                );
            } else {
                $this->Session->setFlash(
                    'Xóa danh mục thất bại, vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        }
        return $this->redirect(array('controller' => 'categories', 'action' =>'index'));
    }
    
    public function getCategoryByProductType($product_type = null) {
        $is_parent = 1;
        $categories = $this->Category->getParentCategoryByProductType($product_type, $is_parent);
        $myjson = $this->my_json_encode($categories);
        echo $myjson;
        exit;
    }

    function my_json_encode($phparr) {
        return json_encode($phparr);
    }

    function sluggable($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}