<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function create()
    {
        return view('dog.new');
    }

    public function store(Request $request)
    {
        $dog = new Dog();
        $dog->dog_name = $request->name;

        if ($dog->save()) {
            return redirect()->back()->with('success','Dog with name: '.$dog->dog_name.' was added successfully');
        } else {
            return redirect()->back()->with('error','Sorry! We apologize for this error');
        }
    }

    public function show()
    {
        $dogs = Dog::all();
        return view('dog.list',['dogs' => $dogs]);
    }

    public function edit($id)
    {
        $dog = Dog::find($id);
        return view('dog.edit',['dog' => $dog]);
    }

    public function update(Request $request,$id)
    {
        $dog = Dog::find($id);
        $dog->dog_name = $request->name;

        if ($dog->save()) {
            return redirect()->back()->with('success','Dog with name: '.$dog->dog_name.' was updated successfully');
        } else {
            return redirect()->back()->with('error','Sorry! We apologize for this error');
        }

    }
}
