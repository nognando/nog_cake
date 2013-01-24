<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    //Carregando AuthComponent
    public $components = array('Session', 'Auth');

    //Funcão para trocar layout default
    protected function _isPrefix($prefix){
        return isset($this->params['prefix']) && $this->params['prefix'] === $prefix;
    }
        
    public function beforeFilter(){
        if($this->_isPrefix('painel'))
        {
            $this->layout = 'painel'; //Layout padrão para prefixo
        }
        
        $this->Auth->authenticate = array('Form' => array(
            'userModel' => 'Usuario',
            'fields' => array(
                'username' => 'login',
                'password' => 'senha')));
        
        $this->Auth->loginAction = array(
            'controller' => 'usuarios',
            'action' => 'login',
            'painel' => true);
        
        $this->Auth->loginRedirect = array
        (
            'controller' => 'inscricoes',
            'action' => 'index',
            'painel' => true);
        
        $this->Auth->logoutRedirect = array
        (
            'controller' => 'pages',
            'action' => 'display', 'evento',
            'painel' => false);
        
        if(!$this->_isPrefix('painel'))
        {
            $this->Auth->allow();
        }
        
        parent::beforeFilter();
    }
    
}
