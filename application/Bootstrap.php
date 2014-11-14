<?php

/**
 * Class     Bootstrap
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用, 调用的次序和声明的次序相同
 * 这些方法, 都接受一个参数: Yaf_Dispatcher $dispatcher
 *
 * @author   luoliang1
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {

    /**
     * Method  _initConfig
     * 初始化系统配置
     *
     * @author luoliang1
     *
     * @param Yaf_Dispatcher $dispatcher
     */
    public function _initConfig(Yaf_Dispatcher $dispatcher) {
        Yaf_Registry::set('config', Yaf_Application::app()->getConfig());
    }

    /**
     * Method  _initTimeZone
     * 初始化时区
     *
     * @author luoliang1
     *
     * @param \Yaf_Dispatcher $dispatcher
     */
    public function _initTimeZone(Yaf_Dispatcher $dispatcher) {
        date_default_timezone_set(Yaf_Registry::get('config')->application->default->timezone);
    }
}