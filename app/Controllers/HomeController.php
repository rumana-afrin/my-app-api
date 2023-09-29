<?php

namespace App\Controllers;

use App\Models\AddCategoryModel;

use App\Controllers\BaseController;
class HomeController extends BaseController
{
    public function index()
    {
       $Category = new AddCategoryModel;

       $C_data =[
        'c_data' => $Category->findAll()
       ];

        return view('home', compact('C_data'));
    }
}
                    