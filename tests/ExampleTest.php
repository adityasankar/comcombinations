<?php

namespace Spcom404\Combinations\Tests;

use Orchestra\Testbench\TestCase;
use Spcom404\Combinations\CombinationsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CombinationsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
