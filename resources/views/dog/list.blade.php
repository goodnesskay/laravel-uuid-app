@extends('layouts.master')

@section('content')
    <div class="col-md-12">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Panel Heading</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <a href="{{ url('/') }}" class="btn btn-sm btn-primary btn-create">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th class="hidden-xs">#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dogs as $dog)
                            <tr>
                                <td class="hidden-xs">#</td>
                                <td>{{ ucfirst($dog->dog_name) }}</td>
                                <td><a href="{{ url('edit',['id' => $dog->id ]) }}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection