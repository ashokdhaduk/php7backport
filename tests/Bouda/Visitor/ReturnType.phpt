<?php

namespace BoudaTests;

use Tester\Assert;
use Tester\TestCase;
use Bouda\Php7Backport\Backporter;

require_once __DIR__ . '/../../bootstrap.php';


class ReturnTypeTest extends TestCase
{
    private $backporter;


    public function setUp()
    {
        $this->backporter = new Backporter();
    }


    public function testReturnType()
    {
        $code = '<?php function foo() : SomeClass {}';
        $expected = '<?php function foo() {}';
        Assert::equal($expected, $this->backporter->port($code));
    }
}


$testCase = new ReturnTypeTest;
$testCase->run();
