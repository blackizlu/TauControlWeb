<?php

namespace App\Http\Controllers\dashboard;

use App\Bitacora;
use App\Client;
use App\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;



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

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->contact_id = $contact->id;
        $registro->modulo = 'Contactos';
        $registro->message = 'añadió el contacto ';
        $registro->type = 'create';
        $registro->save();

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

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->contact_id = $contact->id;
        $registro->modulo = 'Contactos';
        $registro->message = 'editó el contacto ';
        $registro->type = 'update';
        $registro->save();


        $message = 'Contacto actualizado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.contacts.index');
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();

        $registro = new Bitacora();
        $registro->user_id = Auth::user()->id;
        $registro->contact_id = $contact->id;
        $registro->modulo = 'Contactos';
        $registro->message = 'eliminó el contacto ';
        $registro->type = 'delete';
        $registro->save();

        return response()->json([
            'success' => true
        ]);
    }
}
