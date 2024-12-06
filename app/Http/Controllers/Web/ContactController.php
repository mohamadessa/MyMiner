<?php

namespace App\Http\Controllers\Web;
<<<<<<< HEAD

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Contact;
=======

use App\Models\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
>>>>>>> 613b0159b1a1ef8346256347ef1dfa02381a4bc0

class ContactController extends Controller
{

    public function index()
    {
        return view('web.contact');
    }

<<<<<<< HEAD

    public function store(Request $request)
=======
    public function getMail()
    {

        return view('admin.contact.mail'); // Render the contact page
    }
    /**
     * Store the submitted contact form data.
     */
    public function sentMail(Request $request)
>>>>>>> 613b0159b1a1ef8346256347ef1dfa02381a4bc0
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

<<<<<<< HEAD
        Contact::create($request->only(['name', 'email', 'phone', 'message']));
=======

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

>>>>>>> 613b0159b1a1ef8346256347ef1dfa02381a4bc0

        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}
