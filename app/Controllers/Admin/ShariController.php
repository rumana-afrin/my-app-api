<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;
use App\Models\JamdaniModel;

class ShariController extends BaseController
{
    public function index()
    {
        return view("admin/dashboard");
      
    }

    public function addJamdani(){

        if($this->request->getPost()){
            $product = $this->request->getVar();
            // dd($product);
            $insertProduct = new JamdaniModel();

             $img = $this->request->getFile('image');
                
          if (! $img->hasMoved()) {
                    $imagename = $img->store(); 
                  
                    $filepath = WRITEPATH . 'uploads/' . $imagename;
                    $data = ['uploaded_fileinfo' => new File($filepath)];
             }

            
          
            $form_data = [
                'category' => $product['category'],
                'title' => $product['title'],
                'price' => $product['price'],
                'd_price' => $product['d_price'],
                'description' => $product['description'],
                'image' => $imagename,
                'sku' => $product['sku'],
                'quantity' => $product['quantity'],    
            ];
        

            if( $insertProduct->insert($form_data)){
                // echo "<h1>Success!</h1>";

                return redirect()->to(base_url('jamdani'));
            }else{
                echo "<h1>error!</h1>";
            }
        }

       

        return view("admin/content/jamdani");
    }
}
