<?php

namespace App\Models;

use CodeIgniter\Model;

class LocacaoModel extends Model
{
    protected $table      = 'tb_locacao';
    protected $primaryKey = 'TB_LOCACAO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['TB_LOCACAO_TIPO',
                                'TB_LOCACAO_VALOR',
                                'TB_LOCACAO_DT_INICIO',
                                'TB_LOCACAO_DT_FIM',
                                'TB_CLIENTE_ID',
                                'TB_FUNCIONARIO_ID',
                                'TB_AUTOMOVEL_ID'];
                             
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}