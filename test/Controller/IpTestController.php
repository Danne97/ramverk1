<?php

namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class IpTestControllerTest extends TestCase
{
    /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        $controller = new IpValidateController();
        $controller->initialize();

        $res = $controller->indexAction();
        $this->assertContains("db is active", $res);
    }


    //
    // /**
    //  * Test the route "info".
    //  */
    // public function testInfoActionGet()
    // {
    //     $controller = new SampleController();
    //     $controller->initialize();
    //     $res = $controller->infoActionGet();
    //     $this->assertContains("db is active", $res);
    // }
    //
    //
    //
    // /**
    //  * Test the route "dump-di".
    //  */
    // public function testDumpDiActionGet()
    // {
    //     // Setup di
    //     $di = new DIFactoryConfig();
    //     $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
    //
    //     // Setup the controller
    //     $controller = new SampleController();
    //     $controller->setDI($di);
    //     $controller->initialize();
    //
    //     // Do the test and assert it
    //     $res = $controller->dumpDiActionGet();
    //     $this->assertContains("di contains", $res);
    //     $this->assertContains("configuration", $res);
    //     $this->assertContains("request", $res);
    //     $this->assertContains("response", $res);
    // }
}
