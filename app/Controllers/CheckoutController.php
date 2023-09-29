<?php
namespace App\Controllers;

class CheckoutController extends BaseController{
  
  public function checkout($request)
  {
      $cartItem = json_decode($request->input('cartItem'), true);
     
      dd($cartItem);
      // Access the properties of $cartItem as needed
  
      // Perform your checkout logic
  
      // Redirect or return a response
      return view('checkput');
  }
  
    public function index(){

      return view('checkput');
    }
}