<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Notifications\InvoicePaid;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contato.index');
    }

    public function form(Request $request)
    {
        $contact = Contact :: create($request -> all());

        // Notification::route('mail', config('mail.from.address')) //não consegue reconhecer o comando route
        //     ->notify(new NewContact($contact));

        ddd($contact);
    }

}
