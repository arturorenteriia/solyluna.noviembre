<?php namespace solyluna\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use solyluna\Contact;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Http\Requests\ContactoRequest;

class MailController extends Controller {

    public function send(ContactoRequest $request, Redirector $redirector)
    {
        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();
        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
        \Mail::send('emails.message', $data, function($message) use ($request)
        {
            //remitente
            $message->from($request->email, $request->name);

            //asunto
            $message->subject($request->subject);

            //receptor
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
            $contacts = new Contact($request->all());
            $contacts->full_name = $request->first_name." ".$request->last_name;
            $contacts->save();
            Session::flash('message', $contacts->full_name." Thanks for contacting us, one of ours Health Advisor will be contacting you soon!");
        });

        return $redirector->back();
    }

}