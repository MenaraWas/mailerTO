<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mdl_user;

class pesertaController extends Controller
{
    //
    function show(){
        $data = mdl_user::all();
        return view('home',['members'=>$data]);
    }

    function showData($id){
        $data= mdl_user::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req){
        $data = mdl_user::find($req->id);
        $data -> password=$req->password;
        $data->save();
        return redirect('home');
    }
}
