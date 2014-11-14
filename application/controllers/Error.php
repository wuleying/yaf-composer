<?php

/**
 * Class     ErrorController
 *
 * @author   luoliang1
 */
class ErrorController extends Base\BaseControllers {

    /**
     * Method  errorAction
     *
     * @author luoliang1
     *
     * @param $exception
     */
    public function errorAction($exception) {
        $this->getView()->assign('page_title', 'Error');
        $this->getView()->assign('exception', $exception);
    }

}