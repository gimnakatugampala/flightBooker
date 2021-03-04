@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Book A Flight</h1>
    <form action="{{route('booking.store')}}" method="POST">
        @csrf
        <div class="form-to">
            <label for="from" class="form-label">From</label>
            <i class="fas fa-plane-departure"></i>
            <input type="text" name="from" class="form-control mb-2 @error('from') border border-danger @enderror" id="from" placeholder="Enter Destination" value="{{old('from')}}">
            @error('from')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
            <i class="fas fa-exchange-alt"></i>

            <label for="to" class="form-label">To</label>
            <i class="fas fa-plane-arrival"></i>
            <input type="text" name="to" class="form-control mb-2 @error('to') border border-danger @enderror" id="to" placeholder="Enter Destination" value="{{old('to')}}">
            @error('to')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" name="firstName" class="form-control mb-2 @error('firstName') border border-danger @enderror" placeholder="Enter First Name" value="{{old('firstName')}}">
            @error('firstName')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" name="lastName" class="form-control mb-2 @error('lastName') border border-danger @enderror" placeholder="Enter Last Name" value="{{old('lastName')}}">
            @error('lastName')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control mb-2 @error('email') border border-danger @enderror" placeholder="Enter Email" value="{{old('email')}}">
            @error('email')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="Passport" class="form-label">Passport No:</label>
            <input type="number" name="passport" class="form-control mb-2 @error('passport') border border-danger @enderror" placeholder="Enter Passport Number" value="{{old('passport')}}">
            @error('passport')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="airline" class="form-label">Airline Name</label>
            <input type="text" name="airline" class="form-control mb-2 @error('airline') border border-danger @enderror" placeholder="Your Preffered Airline" value="{{old('airline')}}">
            @error('airline')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="date" class="form-label">Departure Date</label>
            <input type="date" name="date" class="form-control mb-2 @error('date') border border-danger @enderror" value="{{old('date')}}">
            @error('date')
            <div class="alert alert-danger text-center">{{$message}}</div>
            @enderror
        </div>

        <div class="form-check">
            <label>Payment Method</label><br>

            <input class="form-check-input" type="radio" name="cash">
            <label class="form-check-label">Cash</label><br>

            <input class="form-check-input" type="radio" name="visa">
            <label class="form-check-label">Visa</label><br>

            <input class="form-check-input" type="radio" name="paypal">
            <label class="form-check-label">Paypal</label><br>

            <input class="form-check-input" type="radio" name="bitcoin">
            <label class="form-check-label">Bitcoin</label><br>

        </div>

        <button type="submit" class="btn btn-primary mt-3">Book</button>
    </form>
</div>
@endsection