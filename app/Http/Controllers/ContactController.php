<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactPage()
    {
        return Inertia::render('ContactPage');
    }
    public function contactRegistration(Request $request)
    {

        try {

            $request->validate([
                'fullName' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                
            ]);
            $contact = new Contact();
            $contact->fullName = $request->fullName;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();
            $data = [
                'message'=> 'Your message has been sent successfully. I will contact you soon.',
                'status' => true,
                'error' => '',
            ];
            return back()->with($data);
        } catch (\Exception $e) {
             $data = [
                'message'=> 'Something went wrong, please try again later.',
                'status' => false,
                'error' => $e->getMessage(),
            ];
            return back()->with($data);
        }
    }
}
