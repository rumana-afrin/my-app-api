<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'newproduct';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = [

        'Category',
        'title',
        'price',
        'd_price',
        'description',
        'image',
        'sku',
        'quantity'

    ];
}