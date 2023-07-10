<?php

namespace App\Models;

use CodeIgniter\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'zip_code',
        'street',
        'number',
        'supplemental',
        'district',
        'city',
        'state'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
