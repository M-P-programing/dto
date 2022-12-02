<?php

namespace MPProgramming\Dto\Tests\TestSupport;

use MPProgramming\Dto\DataTransfer;

class DataTest extends DataTransfer
{
  public function __construct(
    public string $column_1,
    public string $column_2
  ) {
  }

  public static function model(): string
  {
    return self::class;
  }
}
