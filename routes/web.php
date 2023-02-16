<?php

use App\Solid\AreaCalculator;
use App\Solid\Circle;
use App\Solid\Rectangle;
use App\Solid\Triangle;
use Illuminate\Support\Facades\Route;
use App\Solid\PaymentService;
use App\Solid\StripePaymentMethod;
use App\Solid\PaypalPaymentMethod;
use App\Solid\CodPaymentMethod;
use App\Solid\PdfExport;
use App\Solid\CsvExport;
use App\Solid\JsonExport;
use App\Solid\SaleReports;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

   
    return (new AreaCalculator())->totalArea(
        new Rectangle(10, 20),
        new Rectangle(40, 30),
        new Circle(10),
        new Triangle(20, 30) 
    );
});

Route::get('/payment', function () {

   
    return (new PaymentService())->pay(new CodPaymentMethod);
});

// Route::get('/sale', function () {

//     $saleReports = new SaleReports;
//     $pdfExport = new PdfExport;

//     return $pdfExport->export(
//         $saleReports->between('1 jan 2022','1 jan 2023')
//     );
// });

Route::get('/sale-export', function () {

   
    return (new SaleReports())->between('1 jan 2022','1 jan 2023')->export(

        new JsonExport()
    );
});
