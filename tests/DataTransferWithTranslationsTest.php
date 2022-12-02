<?php

use MPProgramming\Dto\Tests\TestCase;
use MPProgramming\Dto\Tests\TestSupport\DataTranslatableDto;

class DataTransferWithTranslationsTest extends TestCase
{
  public function setUp(): void
  {
    parent::setUp();
  }

  public function test_from_request_with_translations()
  {
    request()->merge([
      'column_1'     => 'Prueba',
      'column_2'     => 'Test',
      'column_3'     => 'Ignored Column',
      'translations' => [
        'en' => [
          'name'        => 'Test',
          'description' => 'Description',
        ],
        'es' => [
          'name'        => 'Prueba',
          'description' => 'Descripción',
        ],
      ],
    ]);

    $dataTest = DataTranslatableDto::fromRequestWithTranslations(request());
    $this->assertArrayHasKey('en', $dataTest->toArray());
  }
}
