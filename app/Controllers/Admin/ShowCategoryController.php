<?php
namespace App\Controllers\Admin;
use App\Models\AddCategoryModel;
use App\Controllers\BaseController;

class ShowCategoryController extends BaseController{

    public function showCategory(){

      $selectCategory = new AddCategoryModel;

      $categoryData = [ 
        
        'pdata' => $selectCategory->findAll(),
       ];

       return view('admin/content/showcategory', compact('categoryData'));
    }
}
