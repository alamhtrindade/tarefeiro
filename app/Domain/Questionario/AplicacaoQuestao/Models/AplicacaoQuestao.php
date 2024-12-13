<?php

namespace App\Domain\Questionario\AplicacaoQuestao\Models;

use App\Application\Models\BaseModel;
use App\Domain\Questionario\Questao\Models\Questao;

class AplicacaoQuestao extends BaseModel
{
    const ID_APLICACAO_QUESTAO = 'id_aplicacao_questao';
    const ID_APLICACAO = 'id_aplicacao';
    const ID_QUESTAO = 'id_questao';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.aplicacao_questao';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_APLICACAO_QUESTAO;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_APLICACAO,
        self::ID_QUESTAO
    ];

    public function questoes()
    {
        return $this->hasOne(Questao::class, 'id_questao', self::ID_QUESTAO)
            ->where(Questao::ATIVO, true);
    }
}
