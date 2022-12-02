<?php

namespace MPProgramming\Dto\Tests\TestSupport;

use MPProgramming\Dto\Contracts\DtoTranslatableContract;
use MPProgramming\Dto\DataTransfer;
use MPProgramming\Dto\Traits\DtoTranslationsTrait;

class DataTranslatableDto extends DataTransfer implements DtoTranslatableContract
{
  use DtoTranslationsTrait;

  public function __construct(
    public string $column_1,
    public string $column_2,
    public array $translations
  ) {
  }

  public static function model(): string
  {
    return self::class;
  }
}
