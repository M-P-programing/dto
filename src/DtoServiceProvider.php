<?php

namespace Altra\Dto;

use Altra\Dto\Commands\MakeDto;
use Illuminate\Support\ServiceProvider;

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
