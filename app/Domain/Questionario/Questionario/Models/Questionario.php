<?php

namespace App\Domain\Questionario\Questionario\Models;

use App\Application\Models\BaseModel;


class Questionario extends BaseModel
{
    const ID_QUESTIONARIO = 'id_questionario';
    const DESCRICAO = 'descricao';
    const VERSAO = 'versao';
    const ID_MODULO_MODELO = 'id_modulo_modelo';
    const CHAVE = 'chave';
    const TIPO = 'tipo';
    const ID_QUESTIONARIO_PRINCIPAL = 'id_questionario_principal';
    const SITUACAO = 'situacao';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.questionario';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_QUESTIONARIO;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::DESCRICAO,
        self::VERSAO,
        self::ID_MODULO_MODELO,
        self::TIPO,
        self::ID_QUESTIONARIO_PRINCIPAL,
        self::SITUACAO,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        self::SITUACAO => 'boolean',
    ];
}
