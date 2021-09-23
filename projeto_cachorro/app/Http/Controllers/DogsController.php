<?php

namespace App\Http\Controllers;
use App\Models\Dog;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function index() {
        return Dog::all();
    }

    public function create(){}

    public function store(Request $request){
        # dd($request->all());
        # return Dog::create(['name'=>'Xuxu','family'=>'Pitbull']);
        return Dog::create($request->all());
    }

    public function show($id){
        return Dog::findOrFail($id);
    }

    public function edit($id){}

    public function update(Request $request, $id) {
        $cachorro = Dog::findOrFail($id);
        $cachorro->update($request->all());
    }

    public function destroy($id) {
        $cachorro = Dog::findOrFail($id);
        $cachorro->delete();
    }
}
