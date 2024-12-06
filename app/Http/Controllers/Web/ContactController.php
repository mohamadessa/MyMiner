<?php

namespace App\Http\Controllers\Web;

use App\Models\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('contact.index'); // Render the contact page
    }

    public function getMail()
    {

        return view('admin.contact.mail'); // Render the contact page
    }
    /**
     * Store the submitted contact form data.
     */
    public function sentMail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);


        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,

        ];

        //Mail::to('mohamad.issa.5225@gmail.com')->send($this->$details);
        Mail::to('mohamad.issa.5225@gmail.com')->send(new ContactMail($details));

        // Save the data to the database
        // Contact::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message,
        // ]);


        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
