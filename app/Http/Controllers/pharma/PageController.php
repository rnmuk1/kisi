<?php
namespace App\Http\Controllers\pharma;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function faq()
    {
        return view('livewire.pharma.faq');

    }

    public function confidentiel()
    {
        return view('livewire.pharma.confidentiel');

    }

    public function terms()
    {
        return view('livewire.pharma.terms');

    }

    public function about()
    {
        return view('livewire.pharma.about-us');

    }


}
