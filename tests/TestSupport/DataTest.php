<?php

namespace Altra\Dto\Tests\TestSupport;

use Altra\Dto\DataTransfer;

class DataTest extends DataTransfer
{
  public function __construct(
    public string $column_1,
    public string $column_2
  ) {}
}
