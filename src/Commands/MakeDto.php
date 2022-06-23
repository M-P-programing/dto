<?php

namespace Altra\Dto\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeDto extends GeneratorCommand
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'make:dto';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new data transfer object';

	/**
	 * The type of class being generated.
	 *
	 * @var string
	 */
	protected $type = 'Dto';

	/**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		return  __DIR__ . '/../../stubs/dto.stub';
	}

	/**
	 * Get the default namespace for the class.
	 *
	 * @param  string  $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		return $rootNamespace . '\Dto';
	}
}
