<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    //ninja index
    public function index()
    {
        $ninjas = Ninja::query()->get();
        return view("ninjas.index", compact('ninjas'));
    }

    // detail ninja
    public function detail(Ninja $ninja)
    {

        dump(Ninja::find($ninja));
    }

    // create ninja
    public function create()
    {
        dump("create ninja");
    }

    // createAction ninja
    public function createAction(Request $request)
    {
        dump($request->all());
    }

    // update page ninja
    public function update(Ninja $ninja)
    {
        dump('update ninja page');
    }

    // updateAction
    public function updateAction(Request $request, Ninja $ninja)
    {
        dd($request->all());
    }

    // delete ninja
    public function delete(Ninja $ninja)
    {
        dd('delete ninja');
    }
}
