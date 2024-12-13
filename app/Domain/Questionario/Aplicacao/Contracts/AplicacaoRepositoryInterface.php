<?php

namespace App\Domain\Questionario\Aplicacao\Contracts;

use App\Domain\Questionario\Aplicacao\Models\Aplicacao;

interface AplicacaoRepositoryInterface
{
    public function inserirRespostas(int $idAplicacao, array $respostas,int $pontuacao_total): array;
}
