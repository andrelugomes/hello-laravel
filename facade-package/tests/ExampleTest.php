<?php

namespace Andrelugomes\FacadePackage\Tests;

use Orchestra\Testbench\TestCase;
use Andrelugomes\FacadePackage\CalculateServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CalculateServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
