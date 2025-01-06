<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class AjaxController extends Controller
{
    public function contactSave(ContactFormRequest $request) {

        $data = $request->all();
        $data['ip'] = $request->ip();

        /* $newData = [

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => $request->ip(),
        ];
        $lastData = Contact::create($newData);
        return $lastData;
        */

        $lastData = Contact::create($data);
        return back()->with(['success'=>'Mesajınız göndərildi.']);

    }
}
