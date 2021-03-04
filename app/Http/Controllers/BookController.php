<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'from' => 'required|max:255',
            'to' => 'required|max:255',
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email',
            'passport' => 'required|max:100',
            'airline' => 'required|max:255',
            'date' => 'required'
        ]);

        Booking::create([
            'from' => $request->from,
            'to' => $request->to,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'passport' => $request->passport,
            'airline' => $request->airline,
        ]);

        return redirect('/')->with('message', 'Flight Booked');
    }
}
