<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use App\Mail\Contact as ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            # Grab data from form
            $data = $request->all();
            $data = $data['data'];

            # Validation
            $validator = Validator::make($data, [
                'name' => 'required',
                'email' => 'email|required',
                'subject' => 'required',
                'message' => 'required'
            ]);

            if($validator->fails()) {
                return response()->json(['submission' => false, 'validation' => $validator->errors()]);
            }

            # Create and store new Contact
            $contact = Contact::create($data);

            # Send email to yours truly
            Mail::to(config('mail.from.address'))->send(new ContactMail($contact));

            return response()->json(['submission' => true]);
        } catch (\Exception $exception) {
            return response()->json(['submission' => false, 'error' => $exception->getMessage()]);
        }
    }

}
