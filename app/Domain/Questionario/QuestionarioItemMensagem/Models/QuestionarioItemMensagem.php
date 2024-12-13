<?php

namespace App\Domain\Questionario\QuestionarioItemMensagem\Models;


use App\Application\Models\BaseModel;

class QuestionarioItemMensagem extends BaseModel
{

    const ID_QUESTIONARIO_ITEM = 'id_questionario_item';
    const ID_MENSAGEM = 'id_mensagem';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.questionario_item_mensagem';

    public $incrementing = false;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = [self::ID_QUESTIONARIO_ITEM,self::ID_MENSAGEM];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ID_QUESTIONARIO_ITEM,
        self::ID_MENSAGEM
    ];
}
