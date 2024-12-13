<?php

namespace App\Domain\Questionario\QuestionarioItem\Models;

use App\Application\Models\BaseModel;

class QuestionarioItem extends BaseModel
{

    const ID_QUESTIONARIO_ITEM = 'id_questionario_item';
    const ID_QUESTIONARIO = 'id_questionario';
    const ID_ETAPA = 'id_etapa';
    const SEQUENCIA = 'sequencia';
    const IR_PARA_SEQUENCIA = 'ir_para_sequencia';
    const ENCERRA_LOOP = 'encerra_loop';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.questionario_item';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_QUESTIONARIO_ITEM;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_QUESTIONARIO,
        self::ID_ETAPA,
        self::SEQUENCIA,
        self::IR_PARA_SEQUENCIA,
        self::ENCERRA_LOOP
    ];
}
