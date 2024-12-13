<?php

namespace App\Domain\Questionario\Questao\Models;

use App\Application\Models\BaseModel;
use App\Domain\Questionario\Etapa\Models\Etapa;
use App\Domain\Questionario\Opcao\Models\Opcao;

class Questao extends BaseModel
{
    const ID_QUESTAO = 'id_questao';
    const CONTEUDO = 'conteudo';
    const QUANTIDADE_OPCAO = 'quantidade_opcao';
    const ATIVO = 'ativo';
    const PERSONALIZADA = 'personalizada';
    const ID_ANEXO = 'id_anexo';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questionario.questao';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = self::ID_QUESTAO;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::CONTEUDO,
        self::QUANTIDADE_OPCAO,
        self::ATIVO,
        self::PERSONALIZADA,
        self::ID_ANEXO,
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
     * Etapa a qual pertence a questão
     *
     */
    public function etapa()
    {
        return $this->belongsTo(Etapa::class, 'id_etapa', 'id_etapa');
    }

    /**
     * Opções da questão
     *
     */
    public function opcoes()
    {
        return $this->hasMany(Opcao::class, Opcao::ID_QUESTAO, self::ID_QUESTAO)
            ->where(Opcao::ATIVO, true)
            ->orderBy(Opcao::SEQUENCIAL);
    }
}
