<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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

            # Create and store new Contact
            $contact = new Contact();
            $contact->fill($data);
            $contact->save();

            return response()->json(['submission' => true]);
        } catch (\Exception $exception) {
            return response()->json(['submission' => false]);
        }
    }

}
