<?php

namespace App\Controllers;

use App\Models\NewProductModel;

class Shari extends BaseController{

    public function all(){
        $select = new NewProductModel();

        $data = [
            'pdata' => $select->findAll(),
            'pdata' => $select->paginate(5),
            'pager' => $select->pager,
            
        ];

        
       
            return view('product/shari', compact('data'));
        

       
    
    }
}
?>