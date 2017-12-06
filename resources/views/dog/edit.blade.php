@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <form action="{{ url('update',['id' => $dog->id ]) }}" method="post">
            {{ csrf_field() }}
            <h2 class="text-center">Edit Dog Record With Name "{{ $dog->dog_name }}" </h2><br>
            <label for="dogName" class="sr-only">Dog's Name</label>
            <input type="text"  class="form-control" name="name" value="{{ $dog->dog_name }}" placeholder="Dog Name" required autofocus>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
        </form>
        <hr>
        <div class="text-center">
            <a href="{{ url('list') }}" class="btn btn-success">View Dog List</a>
        </div>
    </div>
@endsection