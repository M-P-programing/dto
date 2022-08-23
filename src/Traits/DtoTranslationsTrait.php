<?php

namespace Altra\Dto\Traits;

use Altra\Dto\Contracts\DtoTranslatableContract;

trait DtoTranslationsTrait
{
    public static function fromRequestWithTranslations(mixed $request): static
    {
        $properties = get_class_vars(static::class);
        $data = [];
        foreach ($properties as $property => $value) {
            $data[$property] = $request->get($property);
        }
        $dto = new static(...$data);
        self::TransformTranslationData($dto);

        return $dto;
    }

    /**
     * Get request data for create and update methods
     */
    protected static function TransformTranslationData(DtoTranslatableContract &$dto): void
    {
        $translations = $dto->translations;
        foreach ($translations as $language => $values) {
            $dto->$language = $values;
        }
        unset($dto->translations);
    }
}
