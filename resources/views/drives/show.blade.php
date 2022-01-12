@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Show file : {{$drive->id}}</h1>
        <div class="col-md-6 mx-auto mt-3">
            <div class="card">
                <img src="{{ asset("upload/$drive->file") }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$drive->title}}</h5>
                    <p class="card-text">{{$drive->description}}</p>
                    <a href="{{ route('drives.download', ['id'=>$drive->id]) }}" class="btn btn-success rounded-pill" style="float: right">Download</a>
                </div>
            </div>
        </div>
    </div>
@endsection
