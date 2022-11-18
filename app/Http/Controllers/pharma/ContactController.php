<?php
namespace App\Http\Controllers\pharma;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('livewire.pharma.contact');

    }


}
