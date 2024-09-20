<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Guest;

class FormGuestController extends Controller
{
    public function index()
    {
        $institutions = Institution::all();
        return view('pages.form', compact('institutions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5|max:128',
            'institutions_id' => 'required',
            'form' => 'required|min:3|max:255',
            'email' => 'required|email|max:64',
            'phonenumber' => 'required|min:10|max:16',
            'note' => 'required',
        ]);

        $guest = Guest::create($request->all());
        return redirect()->route('form.index')->with('success', 'Data kamu sudah di simpan.');
    }
}
