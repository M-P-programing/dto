<?php

use Altra\Dto\Tests\TestCase;
use Altra\Dto\Tests\TestSupport\DataModel;
use Altra\Dto\Tests\TestSupport\DataTest;

class DataTransferTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_from_model()
    {
        $model = new DataModel([
            'column_1' => 'Prueba',
            'column_2' => 'Test',
        ]);

        $dataTest = DataTest::fromModel($model);
        $this->assertEquals($model->toArray(), $dataTest->toArray());
    }

    public function test_from_request()
    {
        request()->merge(['column_1' => 'Prueba', 'column_2' => 'Test', 'column_3' => 'Ignored Column']);

        $dataTest = DataTest::fromRequest(request());
        $this->assertEquals(['column_2' => 'Test', 'column_1' => 'Prueba'], $dataTest->toArray());
    }

    public function test_from_array()
    {
        $array = [
            'column_1' => 'Prueba',
            'column_2' => 'Test',
            'column_3' => 'Ignored Column',
        ];

        $dataTest = DataTest::fromArray($array);
        $this->assertEquals(['column_2' => 'Test', 'column_1' => 'Prueba'], $dataTest->toArray());
    }

    public function test_to_array()
    {
        $array = [
            'column_1' => 'Prueba',
            'column_2' => 'Test',
            'column_3' => 'Ignored Column',
        ];
        $dataTest = DataTest::fromArray($array);
        $this->assertIsArray($dataTest->toArray());
    }
}
