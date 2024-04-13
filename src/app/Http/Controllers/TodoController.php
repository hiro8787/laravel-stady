<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Contacts;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $contact = Contacts::all();

        return view('index', compact('contact'));
    }

    public function check(TodoRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'content', 'building', 'detail', 'text']);
        Contacts::create($contact);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        return view('thanks');
    }

    public function show(Request $request)
    {
        return view('login');
    }

    public function home(Request $request)
    {
        return view('home');
    }
    public function content(Request $request)
    {
        return view('admin');
    }

}