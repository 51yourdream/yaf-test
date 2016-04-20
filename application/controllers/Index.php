<?php
/**
 * Created by PhpStorm.
 * User: lipeng
 * Date: 16/4/21
 * Time: 上午12:27
 */
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {//默认Action
        $this->getView()->assign("content", "Hello World");
    }
}