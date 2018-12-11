<?php

namespace App\Http\Controllers\dashboard;

use App\Client;
use App\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class ContactsController extends Controller
{
    public function index()
    {
        $contacts = contact::all(); /*Variable users muestra los usuarios en lista*/
        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function add()
    {
        $clients = Client::all();
        return view('dashboard.contacts.add', compact('clients'));
    }

    public function store(Request $request)
    {
        $data = request()->all();

        $this->validate($request, [
            'contact_name' => 'required',
            'phone_number' => 'required',
            'client_id' => 'required',

        ]);

        $contact = new Contact($data);
        $contact->save();

        $message = 'Contacto creado con éxito';
        Session::flash('message', $message);
        return redirect()->route('dashboard.contacts.index');
    }

    public function edit($id){

        $contact = Contact::findOrFail($id);
        $clients = Client::all();
        return view('dashboard.contacts.edit', compact('clients', 'contact'));


    }
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->fill($request->all());
        $contact->update();


        $message = 'Contacto actualizado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.contacts.index');
    }

    public function delete($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();

        $message = 'Contacto eliminado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.contacts.index');

    }
}
