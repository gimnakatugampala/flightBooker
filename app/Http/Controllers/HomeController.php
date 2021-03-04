<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $book = Booking::latest()->get();
        $contact = Contact::latest()->get();

        return view('home', [
            'books' => $book,
            'contacts' => $contact
        ]);
    }

    public function destroy($id)
    {

        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect('/home')->with('message', 'Booking Deleted!');
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/home')->with('message', 'Contact Deleted!');
    }
}
