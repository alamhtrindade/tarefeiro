<?php

namespace App\Domain\Questionario\Questionario\Contracts;

interface QuestionarioRepositoryInterface
{
    public function getFluxoQuestionario(int $idQuestionario);
    public function retornaQuestionarioPadrao();
    public function retornaIdsQuestionariosAtivos(): null|array;
}
