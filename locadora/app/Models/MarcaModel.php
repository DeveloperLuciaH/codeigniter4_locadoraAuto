<?php

namespace App\Models;

use CodeIgniter\Model;

class MarcaModel extends Model
{
    protected $table      = 'tb_marca';
    protected $primaryKey = 'TB_MARCA_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['TB_MARCA_NOME'];
                                
    
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}