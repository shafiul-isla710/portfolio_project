<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactPage(){
        return Inertia::render('ContactPage');

    }
    public function contactRegistration(Request $request){
        
    }
}
