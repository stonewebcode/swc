<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Repositories\ContactRepository;
use App\Http\Requests\ContactRequest;
use App\Contact;
use Mail;
use Carbon;
use Storage;
use App\Helpers\DataHelper;

class ContactsController extends Controller
{


    /**
     * Present a contact us form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $dh = new \App\Helpers\DataHelper();
        $data = $dh->sanitize($request->all());

        $adminname = env('ADMIN_NAME');
        $contactname = $data['name'];
        $contactemail = $data['email'];
        $contactmessage = $data['message'];

        $contactdata = compact('adminname', 'contactname', 'contactemail', 'contactmessage');

        //log the info for a file can put in db later
        //TODO: log info to a db rather than flat file

        $rightNow = \Carbon\Carbon::now();
        $rightNowTs = $rightNow->timestamp;
        $contactfilename = 'contact' . $rightNowTs . '.txt';
        $contents = 'Website Message at ' . $rightNow;
        $contents .= ' Name: ' . $contactname;
        $contents .= ' Email:' . $contactemail;

        Storage::put($contactfilename, $contents);
        Storage::append($contactfilename, $contactmessage);

        Mail::send('contacts.emailadmin', $contactdata, function ($message) use ($contactdata) {
            $message->from(env('MAIL_FROM_EMAIL'), env('MAIL_FROM_NAME'));
            $message->to(env('MAIL_FROM_EMAIL'));
        });


        \Session::flash('flash_message', 'Thank you for your message we will be in touch shortly!');

        return view('homePage');
    }
}