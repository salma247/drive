@extends('layouts.app')

@section('content')

    <div class="container">
        @if (Session::has('done'))
            <div class="alert alert-success text-center w-50 mx-auto">
                <h5 style="font-weight: bold">{{ Session::get('done') }}</h5>
            </div>
        @endif
        <h1 class="text-center mb-3">List Files Page</h1>
        <div class="col-md-8 table-responsive mx-auto">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col" colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drives as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->title }}</td>
                            <td>
                                <a href="{{ route('drives.show', ['id'=>$item->id]) }}">
                                    <i class="fas fa-sign-in-alt text-info p-1" style="font-size: 1.5em"></i>
                                </a>
                                <a href="{{ route('drives.edit', ['id'=>$item->id]) }}">
                                    <i class="far fa-edit text-warning p-1" style="font-size: 1.5em"></i>
                                </a>
                                <a href="{{ route('drives.destroy', ['id'=>$item->id]) }}">
                                    <i class="fas fa-ban text-danger p-1" style="font-size: 1.5em"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection
