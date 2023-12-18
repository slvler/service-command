<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class ServiceCommand extends GeneratorCommand
{

    protected $signature = 'make:service {name}';

    protected $description = 'Create a new service class';

    protected $type = 'class';

    protected function getStub(): string
    { 
        return __DIR__ . '/../../../stubs/service.stub';
    }

    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);
        return str_replace('dummy', $this->argument('name'), $stub);
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }
}
