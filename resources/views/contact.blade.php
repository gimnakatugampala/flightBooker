@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Us</h1>
    <form class="contact" method="POST" action="{{route('contact.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') border border-danger @enderror" id="name" name="name" value="{{old('name')}}">
            @error('name')
            <div class="alert alert-danger mt-2">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control @error('email') border border-danger @enderror" id="email" name="email" value="{{old('email')}}">
            @error('email')
            <div class="alert alert-danger mt-2">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-check-label" for="title">Title</label>
            <input type="text" class="form-control @error('title') border border-danger @enderror" id="title" name="title" value="{{old('title')}}">
            @error('title')
            <div class="alert alert-danger mt-2">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control @error('message') border border-danger @enderror" id="message" name="message" value="{{old('message')}}"></textarea>
            @error('message')
            <div class="alert alert-danger mt-2">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection