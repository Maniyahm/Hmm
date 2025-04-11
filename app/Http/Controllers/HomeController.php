<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Teammember;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('contact');
    }
    public function team()
    {
        $team=Teammember::all();
        return view('team',compact('team'));
    }
    public function store(Request $request)
    {   
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'requirement' => 'required',
        ]);
        
        $contact = Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

        ]);

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully.');
    }
}
