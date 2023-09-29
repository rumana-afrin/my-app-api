<?php

namespace App\Controllers\Admin;

use App\Models\NewProductModel;
use App\Controllers\BaseController;

class DeleteController extends BaseController{

    public function delete($id){
        $select = new NewProductModel();
        $deleteId = $id;
       
        $select->delete([
                    'id' =>$deleteId,
            ]);

            return redirect()->to("admin/dashboard");
    }
}
