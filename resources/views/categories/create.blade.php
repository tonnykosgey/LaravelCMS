@extends('layouts.app')

@section('content')


<div class="card card-default">
    <div class="card-header">
       Create Category
    </div>

    <div class="card-body">
        @if($errors->any())

           <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
           </div>

        @endif
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="form-group mb-3">
                <label class="form-label" for="name">Name</label><br>
                <input class="form-contrl" type="text" id="name" name="name">
            </div>
            
                <button class="btn btn-success" type="submit">Add Category</button>
           

        </form>

    </div>
</div>

@endsection