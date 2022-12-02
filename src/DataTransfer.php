<?php

namespace MPProgramming\Dto;

use Illuminate\Database\Eloquent\Model;
use MPProgramming\Dto\Contracts\DtoContract;

abstract class DataTransfer implements DtoContract
{
  public static function fromRequest(mixed $request): static
  {
    $properties = get_class_vars(static::class);
    $data       = [];
    foreach ($properties as $property => $value) {
      $data[$property] = $request->get($property);
    }

    return new static(...$data);
  }

  public static function fromArray(array $array = []): static
  {
    $properties = get_class_vars(static::class);
    $data       = [];
    foreach ($properties as $property => $value) {
      $data[$property] = $array[$property] ?? null;
    }

    return new static(...$data);
  }

  public static function fromModel(Model $model): static
  {
    $properties = get_class_vars(static::class);
    $data       = [];
    foreach ($properties as $property => $value) {
      $data[$property] = $model?->$property ?? null;
    }

    return new static(...$data);
  }

  public function toArray(): array
  {
    $properties = get_object_vars($this);
    $array      = [];
    foreach ($properties as $property => $type) {
      $array[$property] = $this->$property;
    }

    return $array;
  }
}
