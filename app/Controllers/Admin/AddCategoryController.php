<?php

namespace App\Controllers\Admin;

use CodeIgniter\Files\File;
use App\Controllers\BaseController;
use App\Models\AddCategoryModel;

class AddCategoryController extends BaseController{

    public function addCategory(){

        if($this->request->getPost()){
            $category = $this->request->getVar();
            $addcategory = new AddCategoryModel;
            
            $img = $this->request->getFile('image');

            if (! $img->hasMoved()) {
                $images = $img->store(); 
              
                $filepath = WRITEPATH . 'uploads/' . $images;
                $data = ['uploaded_fileinfo' => new File($filepath)];
         }
            $P_category = [
                'name' => $category['name'],
                'image' =>   $images,
                'status' => $category['status'],
                'quantity' => $category['quantity'],
            ];

            if( $addcategory->insert( $P_category)){
                return redirect()->to('/admin/addCategory');
            }
        }


        return view('admin/content/addCategory');
    }
}   