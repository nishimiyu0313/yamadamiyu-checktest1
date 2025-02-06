<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function find()
    {
        return view('find' , ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Contact::where('name', 'LIKE', "%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
}