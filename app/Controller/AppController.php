<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses ( 'Controller', 'Controller' );

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array ('Session','Cookie' );
	private $__standardLanguage = array('vn','eng','jpn');
	
	function beforeFilter() {
		$this->__switch_lang ();
	}
	private function __switch_lang() {
		if(isset ( $this->request->query ['lang'] )){
			if (in_array($this->request->query ['lang'], $this->__standardLanguage)) {
				if (! $this->Session->check ( 'Config.language' )) {
					// Set language with query ?lang=xxx
					$this->Session->write ( 'Config.language', $this->request->query ['lang'] );
					$this->Cookie->write ( 'lang', $this->request->query ['lang'], false, '20 days' );
				}elseif ($this->request->query ['lang'] != $this->Session->read ( 'Config.language' )){
					// Change language using query ?lang=xxx
					$this->Session->write ( 'Config.language', $this->request->query ['lang'] );
					$this->Cookie->write ( 'lang', $this->request->query ['lang'], false, '20 days' );
				}
			}else{
				// Set default language (English)
				$this->Session->write ( 'Config.language', 'eng' );
				$this->Cookie->write ( 'lang', 'eng', false, '20 days' );
			}
		}else{
			if (!$this->Session->check ( 'Config.language' ) && !$this->Cookie->read ( 'lang' )) {
				// Set default language (English)
				$this->Session->write ( 'Config.language', 'eng' );
				$this->Cookie->write ( 'lang', 'eng', false, '20 days' );
			}elseif ($this->Cookie->read ( 'lang' ) && ! $this->Session->check ( 'Config.language' )) {
				// Set language with Cookie
				$this->Session->write ( 'Config.language', $this->Cookie->read ( 'lang' ) );
			}
		}
	}
	
	function beforeRender() {
	}
}
