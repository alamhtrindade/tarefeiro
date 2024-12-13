<?php

namespace App\Domain\Questionario\QuestionarioItemQuestao\Models;


use App\Application\Models\BaseModel;

class QuestionarioItemQuestao extends BaseModel
{

    const ID_QUESTIONARIO_ITEM = 'id_questionario_item';
    const ID_QUESTAO = 'id_questao';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.questionario_item_questao';

    public $incrementing = false;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = [self::ID_QUESTIONARIO_ITEM,self::ID_QUESTAO];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_QUESTIONARIO_ITEM,
        self::ID_QUESTAO
    ];
}
