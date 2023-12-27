<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        return back()->with('success', 'Votre message a été envoyé avec succès!');
    }

}
