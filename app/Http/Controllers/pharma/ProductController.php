<?php
namespace App\Http\Controllers\pharma;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('pharma.pages.product');

    }

    public function promotion()
    {
        return view('pharma.pages.promotion');

    }

    public function medicine()
    {
        return view('pharma.pages.prod-medic');

    }

    public function health()
    {
        return view('pharma.pages.prod-health');

    }

    public function beauty()
    {
        return view('pharma.pages.prod-beauty');

    }

    public function kid()
    {
        return view('pharma.pages.prod-kid');

    }

    public function sport()
    {
        return view('pharma.pages.prod-sport');

    }

    public function accessory()
    {
        return view('pharma.pages.prod-access');

    }

    public function other()
    {
        return view('pharma.pages.prod-other');

    }




}
