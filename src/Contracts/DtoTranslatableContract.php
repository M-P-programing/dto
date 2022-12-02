<?php

namespace MPProgramming\Dto\Contracts;

interface DtoTranslatableContract extends DtoContract
{
  /**
   * Create a new instance from array
   *
   * @param $request
   *
   * @return array
   */
  public static function fromRequestWithTranslations($request): static;
}
