@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card" id="card">
                <div class="card-header" id="card-header">
                    <h3>Akash Gunathilake</h3>
                </div>

                <div class="card-body" id="card-body">
                    <div class="col-md-6 body-img">
                        <img src="{{asset('images/akash.jpg')}}">
                    </div>
                    <div class="col-md-6 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, tempore non! Officiis recusandae magnam ad, vel quaerat aspernatur exercitationem porro delectus. Ullam, ad. Amet quod doloremque placeat iusto magni distinctio?
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="card" id="card">
                <div class="card-header" id="card-header">
                    <h3>Bryan De Silva</h3>
                </div>

                <div class="card-body" id="card-body">
                    <div class="col-md-6 body-img">
                        <img src="{{asset('images/bryan.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, tempore non! Officiis recusandae magnam ad, vel quaerat aspernatur exercitationem porro delectus. Ullam, ad. Amet quod doloremque placeat iusto magni distinctio?
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="card" id="card">
                <div class="card-header" id="card-header">
                    <h3>Roshan Murugan </h3>
                </div>

                <div class="card-body" id="card-body">
                    <div class="col-md-6  body-img">
                        <img src="{{asset('images/roshan.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, tempore non! Officiis recusandae magnam ad, vel quaerat aspernatur exercitationem porro delectus. Ullam, ad. Amet quod doloremque placeat iusto magni distinctio?
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection