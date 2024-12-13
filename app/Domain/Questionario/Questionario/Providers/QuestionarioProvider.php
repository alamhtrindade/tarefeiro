<?php

namespace App\Domain\Questionario\Questionario\Providers;

use Carbon\Laravel\ServiceProvider;

class QuestionarioProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Domain\Questionario\Questionario\Contracts\QuestionarioRepositoryInterface',
            'App\Domain\Questionario\Questionario\Repositories\QuestionarioRepository'
        );
    }
}
