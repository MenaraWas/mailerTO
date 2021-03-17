<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\kirimEmail;

class KirimEmailController extends Controller
{
    //
    public function index(){
        Mail::to("menaralintang7@gmail.com")->send(new kirimEmail());
        return view('home');
    }
}
