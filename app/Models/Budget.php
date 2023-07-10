<?php

namespace App\Models;

use CodeIgniter\Model;

class Budget extends Model
{
    protected $table = 'budgets';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'quantity',
        'final_price',
        'customer',
        'supplier',
        'product',
        'status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
