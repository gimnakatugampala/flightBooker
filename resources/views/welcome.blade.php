@extends('layouts.app')
@section('content')

<div class="container">

    @if(session('message') == '')
    <div></div>
    @else
    <div class="alert alert-success text-center" id="success-msg">
        <h2>{{session('message')}}</h2>
    </div>
    @endif

    <div class="showcase-img">
        <h1>Welcome to FilghtBooker</h1>
        <p>Book Your Flight Instantly.With Ready to Go Flights</p>
        <div class="overlay"></div>
    </div>
    <div class="info">
        <div class="setion-a">
            <h1>Book</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ab dolorem velit. Nulla inventore dicta iusto architecto corporis, rerum tenetur excepturi quasi quas pariatur et magnam quae a dolore voluptas!
        </div>
        <div class="setion-b">
            <h1>Pack</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ab dolorem velit. Nulla inventore dicta iusto architecto corporis, rerum tenetur excepturi quasi quas pariatur et magnam quae a dolore voluptas!
        </div>
        <div class="setion-b">
            <h1>Travel</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ab dolorem velit. Nulla inventore dicta iusto architecto corporis, rerum tenetur excepturi quasi quas pariatur et magnam quae a dolore voluptas!
        </div>
    </div>
</div>



@endsection