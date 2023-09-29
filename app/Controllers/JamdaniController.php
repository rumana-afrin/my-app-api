<?php

namespace App\Controllers;

use App\Models\JamdaniModel;

class JamdaniController extends BaseController{

    public function all(){
        $select = new JamdaniModel();

        $data = [
            'pdata' => $select->findAll(),
            'pdata' => $select->paginate(5),
            'pager' => $select->pager,
            
        ];

        
       
            return view('product/jamdani', compact('data'));
        

       
    
    }
}
?>