<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EverNote;

class EverNoteController extends Controller
{
    public function index()
    {
        $note = EverNote::all();
        return response()->json($note);
    }
    public function store(Request $request)
    {
        $note = new EverNote;
        dd($request);
        // $note->title = $request->get()

    }
}
