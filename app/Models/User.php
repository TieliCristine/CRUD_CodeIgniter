<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'email',
        'password',
        'cpf',
        'name',
        'birthdate',
        'jobPosition',
        'accessLvl'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Status Constants
    const ACCESS_LOW = 'LOW';
    const ACCESS_MEDIUM = 'MEDIUM';
    const ACCESS_HIGH = 'HIGH';
    const ACCESS_ADMIN = 'ADMIN';

    public function getAccessOptions(): array
    {
        return [
            self::ACCESS_LOW => 'Low',
            self::ACCESS_MEDIUM => 'Medium',
            self::ACCESS_HIGH => 'High',
            self::ACCESS_ADMIN => 'Admin',
        ];
    }
}
