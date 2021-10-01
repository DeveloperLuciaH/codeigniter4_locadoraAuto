<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloModel extends Model
{
    protected $table      = 'tb_modelo';
    protected $primaryKey = 'TB_MODELO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['TB_MODELO_DESC',
                                'TB_MODELO_OBS',
                                'TB_MODELO_DATA'];                                
                             
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}