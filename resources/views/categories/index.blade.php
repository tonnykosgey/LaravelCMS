@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
    
    <a href="{{ route('categories.create') }}" class="btn btn-success ">Add Category</a>

</div>

<div class="card card-default">
    <div class="card-header">
        Categories
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>Name</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($categories as $category)
                    <tr>
                        <th scope="row"> {{ $i++; }} </th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="" class="btn btn-md btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn btn-md btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection