<?php

namespace Altra\Dto\Contracts;

use Illuminate\Database\Eloquent\Model;

interface DtoContract
{
    /**
     * Get model for dto
     *
     * @param $request
     *
     * @return string
     */
    public static function model(): string;

    /**
     * Create a new instance from array
     *
     * @param $request
     *
     * @return array
     */
    public static function fromRequest($request): static;

    /**
     * Create a new instance from array
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return array
     */
    public static function fromModel(Model $model): static;

    /**
     * Create a new instance from array
     *
     * @param array $data
     *
     * @return array
     */
    public static function fromArray(array $data): static;

    /**
     * Returns an array with all the data
     *
     * @return array
     */
    public function toArray(): array;
}
