<?php

namespace Altra\Dto\Tests\TestSupport;

use Altra\Dto\Contracts\DtoTranslatableContract;
use Altra\Dto\DataTransfer;
use Altra\Dto\Traits\DtoTranslationsTrait;

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
