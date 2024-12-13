<?php

namespace App\Domain\Questionario\Aplicacao\Models;

use App\Application\Models\BaseModel;
use App\Domain\Questionario\AplicacaoQuestao\Models\AplicacaoQuestao;

class Aplicacao extends BaseModel
{
    const ID_APLICACAO = 'id_aplicacao';
    const ID_QUESTIONARIO = 'id_questionario';
    const ID_EMPRESA = 'id_empresa';
    const NOME = 'nome';
    const DESCRICAO = 'descricao';
    const DATA_INICIO = 'data_inicio';
    const DATA_TERMINO = 'data_termino';
    const HORA_INICIO = 'hora_inicio';
    const HORA_TERMINO = 'hora_termino';
    const SITUACAO = 'situacao';
    const ID_ANEXO_QRCODE = 'id_anexo_qrcode';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.aplicacao';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_APLICACAO;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_QUESTIONARIO,
        self::ID_EMPRESA,
        self::NOME,
        self::DESCRICAO,
        self::DATA_INICIO,
        self::DATA_TERMINO,
        self::HORA_INICIO,
        self::HORA_TERMINO,
        self::SITUACAO,
        self::ID_ANEXO_QRCODE
    ];

    public function questoesPersonalizadas()
    {
        return $this->hasMany(AplicacaoQuestao::class, 'id_aplicacao', 'id_aplicacao')->orderBy('id_aplicacao_questao')
            ->orderBy(AplicacaoQuestao::ID_APLICACAO_QUESTAO, 'ASC');
    }
}
