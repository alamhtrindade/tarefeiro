<?php

namespace App\Domain\Questionario\Opcao\Models;

use App\Application\Models\BaseModel;
use App\Domain\Questionario\Questao\Models\Questao;

class Opcao extends BaseModel
{
    const ID_OPCAO = 'id_opcao';
    const ID_QUESTAO = 'id_questao';
    const CONTEUDO = 'conteudo';
    const PONTUACAO = 'pontuacao';
    const SEQUENCIAL = 'sequencial';
    const ATIVO = 'ativo';
    const DIGITAVEL = 'digitavel';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.opcao';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_OPCAO;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_QUESTAO,
        self::CONTEUDO,
        self::PONTUACAO,
        self::SEQUENCIAL,
        self::ATIVO,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        self::ATIVO => 'boolean',
    ];

    /**
     * Questão a qual pertence a opção
     *
     */
    public function questao()
    {
        return $this->belongsTo(Questao::class, Questao::ID_QUESTAO, self::ID_QUESTAO);
    }
}
