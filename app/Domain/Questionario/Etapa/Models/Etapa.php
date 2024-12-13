<?php

namespace App\Domain\Questionario\Etapa\Models;

use App\Application\Models\BaseModel;
use App\Domain\Questionario\Questao\Models\Questao;

class Etapa extends BaseModel
{
    const ID_ETAPA = 'id_etapa';
    const DESCRICAO = 'descricao';
    const ATIVO = 'ativo';


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.etapa';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_ETAPA;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::DESCRICAO,
        self::ATIVO,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        self::ATIVO => 'boolean',
    ];

    /**
     * Questões que estão presentes na etapa
     *
     */
    public function questoes()
    {
        return $this->hasMany(Questao::class, 'id_etapa', self::ID_ETAPA);
    }
}
