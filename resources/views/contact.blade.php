@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Us</h1>
    <form class="contact">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label class="form-check-label" for="title">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection