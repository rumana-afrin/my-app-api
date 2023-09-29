<?php

namespace App\Models;

use CodeIgniter\Model;

class JamdaniModel extends Model
{
    protected $table      = 'jamdani';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = [

        'category',
        'title',
        'price',
        'd_price',
        'description',
        'image',
        'sku',
        'quantity'

    ];
}