<?php

namespace MPProgramming\Dto;

use Illuminate\Support\ServiceProvider;
use MPProgramming\Dto\Commands\MakeDto;

class DtoServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any package services.
   *
   * @return void
   */
  public function boot()
  {
    if ($this->app->runningInConsole()) {
      $this->commands([
        MakeDto::class,
      ]);
    }
  }
}
