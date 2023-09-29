<?php

namespace App\Models;

use CodeIgniter\Model;

class AddCategoryModel extends Model
{
    protected $table      = 'category';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = [

        'name',
        'image',
        'status',
        'quantity',
    ];
}