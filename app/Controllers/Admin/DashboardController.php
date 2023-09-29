<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use Idb\Idb;
use CodeIgniter\Files\File;
use App\Models\NewProductModel;

class DashboardController extends BaseController
{
    public function index()
    {
        //composer dump-autoload
        // helper("currency");
        // echo convertAmountToWords(1010.10);
        // echo hi();
        // return view("admin/dashboard");
        // $obj = new Idb();
        // echo "<br>"; 
        // echo $obj->test1();
        return view("admin/dashboard");
      
    }

    public function product(){

        if($this->request->getPost()){
            $product = $this->request->getVar();
            // dd($product);
            $insertProduct = new NewProductModel();

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

                return redirect()->to(base_url('/'));
            }else{
                echo "<h1>error!</h1>";
            }
        }

       

        return view("admin/content/product");
    }
}
