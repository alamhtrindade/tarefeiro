<?php

namespace App\Domain\Questionario\Aplicacao\DTO;

class AplicacaoDTO
{
    public int    $idAplicacao;
    public string $nome;
    public int    $idEmpresa;
    public int    $idQuestionario;
    public string $dataInicio;
    public string $dataTermino;
    public string $horaInicio;
    public string $horaTermino;
    public string $descricao;
    public string $situacao;
    public array  $anexo;
}
