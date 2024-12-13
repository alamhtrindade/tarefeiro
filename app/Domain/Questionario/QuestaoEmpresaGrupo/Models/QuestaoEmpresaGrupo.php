<?php

namespace App\Domain\Questionario\QuestaoEmpresaGrupo\Models;

use App\Application\Models\BaseModel;

class QuestaoEmpresaGrupo extends BaseModel
{
    const ID_EMPRESA_GRUPO = 'id_empresa_grupo';
    const ID_QUESTAO = 'id_questao';
    const CONTEUDO = 'conteudo';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.questao_empresa_grupo';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = [self::ID_EMPRESA_GRUPO,self::ID_QUESTAO];

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_EMPRESA_GRUPO,
        self::ID_QUESTAO,
        self::CONTEUDO,
    ];

    protected function setKeysForSaveQuery($query)
    {
        return $query->where(self::ID_EMPRESA_GRUPO, $this->getAttribute(self::ID_EMPRESA_GRUPO))
            ->where(self::ID_QUESTAO, $this->getAttribute(self::ID_QUESTAO));
    }
}
