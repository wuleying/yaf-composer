<?php

namespace Base;

/**
 * Class     BaseControllers
 * 全局的控制器基类
 *
 * @author   luoliang1
 */
class BaseControllers extends \Yaf_Controller_Abstract {

    /**
     * Variable  request
     * request对象
     *
     * @author   luoliang1
     * @var      object
     */
    public $request = null;

    /**
     * Variable  view
     * view对象
     *
     * @author   luoliang1
     * @var      object
     */
    public $view = null;

    /**
     * Method  init
     * 初始化方法
     *
     * @author luoliang1
     */
    public function init() {
        $this->request = $this->getRequest();
        $this->view    = $this->getView();
    }

}