@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            div class="container pt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-md-12"><h2>Total</h2></div>
                        <div class="col-md-12"><h2>200</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-md-12"><h2>Men</h2></div>
                        <div class="col-md-12"><h2>{{$male}}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="row text-center">
                        <div class="col-md-12"><h2>Women</h2></div>
                        <div class="col-md-12"><h2>{{$female}}</h2></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h4>List of registered runners</h4>
            </div>
        </div>
        <br>
        <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Nationality</td>
                <td>Gender</td>
                <td>Age</td>
                <td>Mobile</td>
                <td>Race Category</td>
                <td>Team Name</td>
                <td>Emergency</td>
                <td>Registered At</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($marathons as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->full_name}}</td>
                    <td>{{$m->nationality}}</td>
                    <td>{{$m->gender}}</td>
                    <td>{{$m->age}}</td>
                    <td>{{$m->mobile}}</td>
                    <td>{{$m->race_category}}</td>
                    <td>{{$m->team_name}}</td>
                    <td>{{$m->emergency}}</td>
                    <td>{{$m->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
        </div>
    </div>
</div>
@endsection
