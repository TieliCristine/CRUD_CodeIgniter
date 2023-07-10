<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalData extends Model
{
    protected $table            = 'personal_datas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'cpf',
        'cnpj',
        'phone',
        'email'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
