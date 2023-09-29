<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.  
       
$routes->get('/', 'HomeController::index');       
// $routes->get('/all', 'Product::index');
$routes->get('/all', 'Product::all');
$routes->get('/single/(:any)', 'Product::single/$1');
$routes->get('/shari', 'Shari::all');
$routes->get('/jamdani', 'JamdaniController::all');

// $routes->get('/create', 'Product::insert');
$routes->get('/cartapi', 'CartProduct::index');
$routes->get('/cartapi/(:any)', 'CartProduct::single/$1');

$routes->get('/cart', 'Product::cart');
$routes->get('/checkout', 'CheckoutController::index');



// $routes->get('/api/products', 'Api\ProductController::index');
// $routes->get('/api/products/(:num)', 'Api\ProductController::single/$1');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');
$routes->get('/registration', 'AuthController::registration');
$routes->post('/registration', 'AuthController::registration');




$routes->group('admin', ['filter' => 'admin'],static function ($routes) {
    // $routes->get('products/new', 'Product::create');
    // $routes->post('products/new', 'Product::create');
    // $routes->get('users', 'Admin\UserController::index');
    // $routes->get('test1', 'Benchmark::test1');
    // $routes->get('test2', 'Benchmark::test2');
    $routes->get('dashboard', 'Admin\DashboardController::index');
    // $routes->get('content/product', 'Admin\DashboardController::product');

    $routes->match(['get', 'post'],'addproduct', 'admin\DashboardController::product');
    $routes->get('ShowProduct', 'admin\ShowProductController::select');
    $routes->get('showCategory', 'admin\ShowCategoryController::showCategory');

    $routes->match(['get','post'],'addCategory', 'admin\AddCategoryController::addCategory');
    $routes->get('delete/(:any)', 'admin\DeleteController::delete/$1');

    $routes->match(['get','post'],'addjamdani', 'admin\ShariController::addJamdani');

    
});



// $routes->get('/product/save', 'Product::add');

//-------------------admin---------------------
// $routes->get('/admin', 'Admin\Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
