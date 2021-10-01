<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table      = 'tb_funcionario';
    protected $primaryKey = 'TB_FUNCIONARIO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['TB_FUNCIONARIO_NOME',
                                'TB_FUNCIONARIO_TEL',
                                'TB_FUNCIONARIO_DT_CONTRATO',
                                'TB_CARGO_ID'];                              
                                             
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}