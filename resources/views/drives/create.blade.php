@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center"> Add File Page </h1>
        <!--Show if there is aany errors-->
        @if ($errors->any())
            <div class="alert alert-danger w-50">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-8 mx-auto mt-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('drives.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">File title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="description">File Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>

                        <div class="form-group">
                            <label for="inputFile">Upload your file</label>
                            <input type="file" class="form-control" id="inputFile" name="inputFile">
                        </div>

                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
