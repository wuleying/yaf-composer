<?php

/**
 * Class     IndexController
 *
 * @author   luoliang1
 */
class IndexController extends Base\BaseControllers {

    /**
     * Method  indexAction
     *
     * @author luoliang1
     */
    public function indexAction() {
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler(APPLICATION_PATH . '/logs/app.log', Monolog\Logger::WARNING));

        $log->addWarning('测试', array(123123));
    }

}