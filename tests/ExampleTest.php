<?php

namespace Ajfick\LaravelCart\Tests;

use Orchestra\Testbench\TestCase;
use Ajfick\LaravelCart\LaravelCartServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelCartServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
