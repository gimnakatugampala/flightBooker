@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    else
    <div></div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">All Bookings</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($books as $book)

                        <li class="list-group-item " data-toggle="collapse" data-target="#{{$book->firstName}}">
                            <div class="header">

                                <strong>{{$book->from}} -> {{$book->to}}</strong>
                                <form action="{{route('booking.destroy',$book->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-check"></i> Done</button>
                                </form>

                            </div>

                            <div id="{{$book->firstName}}" class="collapse">
                                Name : <strong>{{$book->firstName}} {{$book->lastName}}</strong> <br>
                                Contact : <strong>{{$book->email}}</strong> <br>
                                Passport : <strong>{{$book->passport}}</strong> <br>
                                Airline : <strong>{{$book->airline}}</strong> <br>
                                Apponited At : <strong>{{$book->created_at->diffForHumans()}}</strong> <br>
                            </div>
                        </li>

                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">User Contacts</div>
                <div class="card-body">

                    <ul class="list-group">
                        @foreach($contacts as $contact)

                        <li class="list-group-item " data-toggle="collapse" data-target="#{{$contact->name}}{{$contact->id}}">
                            <div class="header">

                                <strong>#{{$contact->id}}</strong>
                                <form action="{{route('contact.destroy',$contact->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-check"></i> Checked</button>
                                </form>

                            </div>

                            <div id="{{$contact->name}}{{$contact->id}}" class="collapse">
                                Name : <strong>{{$contact->name}}</strong> <br>
                                Contact : <strong>{{$contact->email}}</strong> <br>
                                Title : <strong>{{$contact->title}}</strong> <br>
                                Message : <strong>{{$contact->message}}</strong> <br>
                                Contacted At : <strong>{{$contact->created_at->diffForHumans()}}</strong> <br>
                            </div>
                        </li>

                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
<div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div> -->


@endsection