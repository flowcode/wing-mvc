<?php

namespace flowcode\enlace\controller;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-08-26 at 20:52:34.
 */
class DefaultControllerTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var DefaultController
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DefaultController();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers flowcode\enlace\controller\DefaultController::defaultMethod
     */
    public function testDefaultMethod_testSecureTrue_testOk() {
        $httpRequest = new \flowcode\enlace\http\HttpRequest();
        $view = $this->object->defaultMethod($httpRequest);
        $view->render();
        $this->expectOutputString('Default controller, default method. We strongly recommend to setup your own default controller.');
    }

}
