<?php
namespace App\Http\Controllers\pro;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pharma.pages.pro.index');

    }
    public function commands()
    {
        return view('pharma.pages.pro.buys');

    }

    public function produits()
    {
        return view('pharma.pages.pro.product-list');

    }

    public function user()
    {
        return view('pharma.pages.pro.user');

    }

    public function agent()
    {
        return view('pharma.pages.pro.agent');

    }



}
