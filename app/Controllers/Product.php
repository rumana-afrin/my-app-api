<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    private $model;
    function __construct()
    {
        $this->model = model(ProductModel::class);
        // $this->model = new ProductModel();
    }  
// -------------------------------------
    public function all()
    {
        // $all = $this->model->findAll();
            
        $allProduct = [
            'total' => $this->model->countAll(),
            'product' => $this->model->paginate(15),
            'pager' => $this->model->pager,

        ];

    
        // return view('product/all', compact('all'));
        return view('product/all', compact('allProduct'));
    }
 // ---------------------------
    public function single($id)
    {
        $info = $this->model->find($id);
       
        return view('product/single', compact('info'));
    }
// ----------------------------------
   public function cart(){
     return view('cart');
   }
   
    
}
