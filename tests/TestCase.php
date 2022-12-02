<?php

namespace MPProgramming\Dto\Tests;

use MPProgramming\Dto\DtoServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
  protected function setUp(): void
  {
    parent::setUp();
  }

  protected function getPackageProviders($app)
  {
    return [
      DtoServiceProvider::class,
    ];
  }

  public function getEnvironmentSetUp($app)
  {
    config()->set('database.default', 'testing');
  }
}
