<?php
namespace App\Http\Controllers\pharma;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view('pharma.pages.cart');

    }


}
