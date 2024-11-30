<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactFormRequest;

class AjaxController extends Controller
{
    public function contactCreate(ContactFormRequest $request) {

        $data = $request->all();
        $data['ip'] = request()->ip();



        $lastData = Contact::create($data);

        return back()->with('success',"Mesajınız göndərildi.");
    }
}
