<?php

namespace App\Domain\Questionario\Mensagem\Models;

use App\Application\Models\BaseModel;

class Mensagem extends BaseModel
{
    const ID_MENSAGEM = 'id_mensagem';
    const DESCRICAO = 'descricao';
    const ID_ANEXO = 'id_anexo';
    const PERSONALIZADA = 'personalizada';
    const ATIVO = 'ativo';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.mensagem';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_MENSAGEM;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_MENSAGEM,
        self::DESCRICAO,
        self::ID_ANEXO,
        self::PERSONALIZADA,
        self::ATIVO
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        self::ATIVO => 'boolean'
    ];
}
