<?php

namespace App\Http\Controllers\Dashboard;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all(); /*Variable users muestra los usuarios en lista*/
        return view('dashboard.users.index', compact('users'));
    }

    public function add()
    {
        return view('dashboard.users.add');
    }

    public function store(Request $request )
    {
        $data = $request->all();

        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:6',

        ]);



        $user = new User($data);
        $user->save();

        $profile = new Profile($data);
        $profile->user_id = $user->id;
        $profile->save();

        $message = 'Usuario creado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.users.index');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('dashboard.users.edit', compact('user'));

    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->update();

        $profile = Profile::findOrFail($user->profile->id);
        $profile->fill($request->all());
        $profile->update();

        $message = 'Usuario actualizado con éxito';
        Session::flash('message', $message);

        return redirect()->back();
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();

        $profile = Profile::findOrFail($user->profile->id);
        $profile->delete();

        $message = 'Usuario eliminado con éxito';
        Session::flash('message', $message);

        return redirect()->back();

    }
}
