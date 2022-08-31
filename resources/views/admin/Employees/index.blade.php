@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            employe Page
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Comapny</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employe as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{$item->company->name}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <a href="{{url('edit-employe/'.$item->id)}}" class="btn btn-primary edit">Edit</a>
                        <a href="{{url('delete-employe/'.$item->id)}}" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
