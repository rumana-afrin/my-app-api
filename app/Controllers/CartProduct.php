<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use app\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;

class CartProduct extends BaseController
{
    use ResponseTrait;
    protected $db;
    protected $security;
    private $model;
    protected $helpers = ['form'];
    public function __construct()
    {
       
        $this->db = \Config\Database::connect();
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        $builder = $this->db->table('newproduct');
        $builder->select('newproduct.*');
       
        $data = $builder->get()->getResultArray();
        // dd($data);

        return $this->respond($data, 200);
    }

    public function single($id)
    {
        $builder = $this->db->table('newproduct');
        $builder->select('newproduct.*');
       
        $builder->where('newproduct.id', $id);
        $result = $builder->get()->getRow();

        if ($result !== null) {
            $info = get_object_vars($result);
        } else {

            $info = null;
        }
        // dd($result);
        return $this->respond($result, 200);
    }

    
}
