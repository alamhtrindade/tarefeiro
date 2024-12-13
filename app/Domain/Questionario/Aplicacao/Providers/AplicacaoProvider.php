<?php

namespace App\Domain\Questionario\Aplicacao\Providers;

use Illuminate\Support\ServiceProvider;

class AplicacaoProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Domain\Questionario\Aplicacao\Contracts\AplicacaoRepositoryInterface',
            'App\Domain\Questionario\Aplicacao\Repositories\AplicacaoRepository'
        );
    }
}
