<?php

namespace App\Domain\Questionario\Aplicacao\Repositories;

use App\Application\Enums\AplicacaoEnum;
use App\Domain\Acompanhamento\Acompanhamento\Models\Acompanhamento;
use App\Domain\Acompanhamento\AcompanhamentoOpcao\Models\AcompanhamentoOpcao;
use App\Domain\Geral\Anexo\Models\Anexo;
use App\Domain\Questionario\Aplicacao\Contracts\AplicacaoRepositoryInterface;
use App\Domain\Questionario\Aplicacao\Models\Aplicacao;
use App\Domain\Questionario\Questionario\Models\Questionario;
use Illuminate\Support\Facades\DB;

class AplicacaoRepository implements AplicacaoRepositoryInterface
{
    public function __construct(
        private Aplicacao $model,
    ) {}

    
}
