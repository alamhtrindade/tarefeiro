<?php

namespace App\Domain\Questionario\Questionario\Repositories;

use App\Domain\Questionario\Questionario\Contracts\QuestionarioRepositoryInterface;
use App\Domain\Questionario\Questionario\Models\Questionario;
use Illuminate\Support\Facades\DB;

class QuestionarioRepository implements QuestionarioRepositoryInterface
{
    public function getFluxoQuestionario(int $idQuestionario)
    {
        return DB::select(
            'select * from questionario.consulta_questionario where id_questionario = ?',
            [$idQuestionario]
        );
    }

    public function retornaQuestionarioPadrao()
    {
        return Questionario::where(Questionario::campoCompleto(Questionario::TIPO), 'Padronizado Abertura')
            ->where(Questionario::campoCompleto(Questionario::SITUACAO), 'Ativo')
            ->get();
    }

    public function retornaIdsQuestionariosAtivos(): null|array
    {
        return Questionario::select(
            Questionario::campoCompleto(Questionario::ID_QUESTIONARIO)
        )
        ->where(Questionario::campoCompleto(Questionario::SITUACAO), 'Ativo')
        ->get()
        ->pluck(Questionario::ID_QUESTIONARIO)
        ->toArray();
    }
}
