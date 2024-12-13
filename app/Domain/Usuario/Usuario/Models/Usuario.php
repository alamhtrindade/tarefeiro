<?php

namespace App\Domain\Usuario\Usuario\Models;

use App\Application\Helpers\PostgresEncryptedHelper;
use App\Application\Models\BaseModel;

class Usuario extends BaseModel {

    const ID_USUARIO = 'id_usuario';
    const SENHA = 'senha';
    const ATIVO = 'ativo';
    const GOOGLE_ID = 'google_id';
    const ID_AVATAR = 'id_avatar';
    const EMAIL = 'email';
    const LETRA = 'letra';
    const NOME = 'nome';
    const CPF = 'cpf';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuario.usuario';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_USUARIO;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::EMAIL,
        self::SENHA,
        self::ATIVO,
    ];

    public $hidden = [
        "id_registro",
        "tabela",
        "criacao",
        "alteracao",
        "id_criador",
        "id_aplicacao_criador",
        "id_alterador",
        "id_aplicacao_alterador",
        'google_id',
    ];

    /**
     * @var string[]
     *
     */
    protected $casts = [
        self::NOME => PostgresEncryptedHelper::class,
        self::EMAIL => PostgresEncryptedHelper::class,
        self::CPF => PostgresEncryptedHelper::class,
    ];

}
