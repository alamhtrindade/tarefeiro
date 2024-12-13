<?php

namespace App\Domain\Questionario\MensagemEmpresaGrupo\Models;

use App\Application\Models\BaseModel;

class MensagemEmpresaGrupo extends BaseModel
{
    const ID_EMPRESA_GRUPO = 'id_empresa_grupo';
    const ID_MENSAGEM = 'id_mensagem';
    const DESCRICAO = 'descricao';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.mensagem_empresa_grupo';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = [self::ID_EMPRESA_GRUPO,self::ID_MENSAGEM];

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_EMPRESA_GRUPO,
        self::ID_MENSAGEM,
        self::DESCRICAO
    ];

    protected function setKeysForSaveQuery($query)
    {
        return $query->where(
            self::ID_EMPRESA_GRUPO,
            $this->getAttribute(self::ID_EMPRESA_GRUPO)
        )->where(
            self::ID_MENSAGEM,
            $this->getAttribute(self::ID_MENSAGEM)
        );
    }
}
