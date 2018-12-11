<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function view(){
        $categories = Category::all(); /*Variable users muestra los usuarios en lista*/
        return view('dashboard.cotizaciones.categories', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'name' => 'required',
        ]);
        $category = new Category($data);
        $category->save();

        return redirect()->route('dashboard.cotizaciones.categories');
    }

    public function update(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->fill($request->all());
        $categories->update();

        return redirect()->back();
    }

    public function destroy($id){
        $categories = Category::findOrFail($id);
        $categories->delete();

        $message = 'Cliente eliminado con éxito';
        Session::flash('message', $message);

        return redirect()->route('dashboard.cotizaciones.categories');

    }
}
