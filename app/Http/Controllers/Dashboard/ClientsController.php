<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all(); /*Variable users muestra los usuarios en lista*/
        return view('dashboard.clients.index', compact('clients'));
    }

    public function view($id)
    {
        $client = Client::findOrFail($id);

        return view('dashboard.clients.view', compact('client'));
    }
    public function add()
    {
        $users = User::all();
        return view('dashboard.clients.add', compact('users'));
    }

    public function store(Request $request)
    {
        $data = request()->all();

        $this->validate($request, [
            'client_name' => 'required',
            'type' => 'required',
            'contact_name' => 'required',
            'phone_number' => 'required',
            'user_id' => 'required'

        ]);

        $client = new Client($data);
        /// esto es igual a decir if($request->has('is_business')) {
        /// $client->is_business = 1;}
        /// else{
        /// $client->is_business = 0; } IF
        $client->is_business = $request->has('is_business') ? 1 : 0;
        $client->save();

        $contact = new Contact($data);
        $contact->client_id = $client->id;
        $contact->save();

        $message = 'Cliente creado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.clients.index');
    }

    public function edit($id){

        $client = Client::findOrFail($id);
        $users = User::all();
        return view('dashboard.clients.edit', compact('users', 'client'));


    }
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->fill($request->all());
        $client->update();


        $message = 'Cliente actualizado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.clients.index');
    }

    public function destroy($id){
        $client = Client::findOrFail($id);
        $client->delete();

        $message = 'Cliente eliminado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.clients.index');

    }
}
