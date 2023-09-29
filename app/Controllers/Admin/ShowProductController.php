<?php

namespace App\Controllers\Admin;

use App\Models\NewProductModel;
use App\Controllers\BaseController;

class ShowProductController extends BaseController{

    public function select(){
        $select = new NewProductModel();

        $data = [
            'pdata' => $select->findAll(),
        ];

        
       
            return view('admin/content/showproduct', compact('data'));
        

       
    }
}
?>