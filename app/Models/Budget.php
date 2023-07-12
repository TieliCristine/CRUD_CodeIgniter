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
        'finalPrice',
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

    // Status Constants
    const STATUS_PENDING = 'PENDING';
    const STATUS_PROGRESSING = 'PROGRESSING';
    const STATUS_AUTHORIZED = 'AUTHORIZED';
    const STATUS_CONCLUDED = 'CONCLUDED';
    const STATUS_DELIVERED = 'DELIVERED';

    public function getStatusOptions(): array
    {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_PROGRESSING => 'Progressing',
            self::STATUS_AUTHORIZED => 'Authorized',
            self::STATUS_CONCLUDED => 'Concluded',
            self::STATUS_DELIVERED => 'Delivered',
        ];
    }
}
