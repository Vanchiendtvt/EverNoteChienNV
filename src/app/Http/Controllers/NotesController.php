<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        return view('evernote.index');
    }
    public function create()
    {
        return view('evernote.showform');
    }
}
