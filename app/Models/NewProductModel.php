<?php

namespace App\Models;

use CodeIgniter\Model;

class NewProductModel extends Model
{
    protected $table      = 'newproduct';
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