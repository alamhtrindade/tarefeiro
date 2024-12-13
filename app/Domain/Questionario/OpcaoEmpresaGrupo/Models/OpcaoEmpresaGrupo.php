<?php

namespace App\Domain\Questionario\OpcaoEmpresaGrupo\Models;

use App\Application\Models\BaseModel;

class OpcaoEmpresaGrupo extends BaseModel
{
    const ID_OPCAO_EMPRESA_GRUPO = 'id_opcao_empresa_grupo';
    const ID_EMPRESA_GRUPO = 'id_empresa_grupo';
    const ID_OPCAO  = 'id_opcao';

    protected $tabela = 'opcao_empresa_grupo';

    protected $primaryKey = self::ID_OPCAO_EMPRESA_GRUPO;
}
